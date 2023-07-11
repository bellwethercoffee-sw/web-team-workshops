<?php

namespace Bellwether\Utils;

/**
 * Helper class used to sign data.
 * 
 * @package web-team-workshops/202307-data-signing
 */
class DataSigner
{
    /**
     * Stores key pems.
     * @var array
     */
    protected $pems;

    /**
     * Returns self. Static constructor.
     * @return \Bellwether\Utils\DataSigner
     */
    public static function signer()
    {
        return new DataSigner;
    }
    /**
     * Generates public and private keys pem data.
     * - Values are returned by reference.
     * 
     * @param string &$publicPem
     * @param string &$privatePem
     * 
     * @return this (chaining)
     */
    public function generateKeys(?string &$publicPem = null, ?string &$privatePem = null)
    {
        if (isset($this->pems))
            return $this;
        $this->pems = [
            'public_key' => null,
            'private_key' => null,
        ];
        $keyPair = openssl_pkey_new([
            'private_key_bits' => 2048,
            'private_key_type' => OPENSSL_KEYTYPE_RSA,
        ]);
        var_dump($keyPair);
        openssl_pkey_export($keyPair, $privateKeyPem);
        $this->pems['private_key'] = $privateKeyPem;
        $details = openssl_pkey_get_details($keyPair);
        $this->pems['public_key'] = $details['key'];
        return $this;
    }
    /**
     * Signs the data.
     * - Signature is returned by reference.
     * 
     * @param mixed  $data
     * @param string &$signature
     */
    public function sign($data, ?string &$signature)
    {
        $this->generateKeys();
        openssl_sign($data, $signature, $this->pems['private_key']);
        return $this;
    }
    /**
     * Returns flag indicating if the verification passes.
     * 
     * @param mixed  $data
     * @param string $signature
     * 
     * @return bool
     */
    public function verify($data, string $signature)
    {
        return openssl_verify($data, $signature, $this->pems['public_key'], 'sha256WithRSAEncryption') === 1;
    }
}