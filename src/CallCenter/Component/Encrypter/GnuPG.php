<?php

namespace CallCenter\Component\Encrypter;

use gnupg;
use Exception;

/**
 * Class to encrypt and decrypt data using gnupg.
 *
 * The intended use of this class is to encrypt data that will be decrypted with a passphrase provided by a user trough a form
 * in a webpage, therefore, GnuPG v 1.0 SHOULD be used in order to send the passphrase as plain text trough HTTP.
 * Version 2 of GnuPG DOESN'T allow to send plain text passprahse trough HTTP.
 *
 * A valid key pair MUST exists in the server, otherwise this class will throw an exception. See the docs in Confluence.
 *
 * @see http://php.net/manual/en/book.gnupg.php
 * @see https://www.gnupg.org/gph/en/manual/c14.html#AEN25
 */
class GnuPG
{
    /**
     * @var string
     */
    protected $recipient = '';

    /**
     * @var string
     */
    protected $passphrase = '';

    /**
     * @var string
     */
    protected $gnupghome = '';

    /**
     * @var object
     */
    protected $gnupg;

    /**
     * @var object
     */
    protected $logger;

    /**
     * Class constructor.
     *
     * @param string $recipient
     * @param string $passphrase
     * @param string $gnupghome
     * @param object $logger
     */
    public function __construct($recipient, $passphrase, $gnupghome, $logger)
    {
        $this->recipient = $recipient;
        $this->passphrase = $passphrase;
        $this->gnupghome = $gnupghome;
        $this->logger = $logger;

        $this->setGnuPGEnvVariable();
        $this->gnupg = new gnupg();
        $this->setGnuPGErrorMode();
    }

    /**
     * Encrypt data.
     *
     * @param string $data
     *
     * @throws Exception
     *
     * @return string
     */
    public function encrypt($data)
    {
        try {
            $this->gnupg->addencryptkey($this->recipient);
            if (!empty($this->passphrase)) {
                $this->gnupg->addsignkey($this->getFingerprint(), $this->passphrase);
                $chiperdata = $this->gnupg->encryptsign($data);
            } else {
                $chiperdata = $this->gnupg->encrypt($data);
            }

            return $chiperdata;
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
        }
    }

    /**
     * Decrypt data.
     *
     * @param string $data
     *
     * @throws Exception
     *
     * @return string
     */
    public function decrypt($data)
    {
        try {
            $this->gnupg->adddecryptkey($this->recipient, $this->passphrase);

            return $this->gnupg->decrypt($data);
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
        }
    }

    /**
     * Setup the GnuPG path environment variable.
     */
    private function setGnuPGEnvVariable()
    {
        putenv('GNUPGHOME='.$this->gnupghome);
    }

    /**
     * Return the fingerprint of the keyring to encrypt data.
     *
     * @todo add ckeck on fingerprint against recipient, in case of posible multiple keys in the server
     *
     * @throws Exception
     *
     * @return string
     */
    private function getFingerprint()
    {
        try {
            $fingerprint = '';
            $records = $this->gnupg->keyinfo('');
            foreach ($records as $record) {
                foreach ($record['subkeys'] as $subkey) {
                    if ($subkey['can_encrypt'] == 1) {
                        //TODO: check if email and recipient match before asign $fingerprint variable
                        $fingerprint = $subkey['fingerprint'];
                    }
                }
            }

            return $fingerprint;
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());
        }
    }

    /**
     * Set the gnupg extension eror mode to throw an Exception in case of failure.
     */
    private function setGnuPGErrorMode()
    {
        $this->gnupg->seterrormode(gnupg::ERROR_EXCEPTION);

    }
}
