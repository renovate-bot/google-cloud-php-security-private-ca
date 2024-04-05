<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CertificateConfig][google.cloud.security.privateca.v1.CertificateConfig]
 * describes an X.509 certificate or CSR that is to be created, as an
 * alternative to using ASN.1.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateConfig</code>
 */
class CertificateConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Specifies some of the values in a certificate that are related to
     * the subject.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateConfig.SubjectConfig subject_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $subject_config = null;
    /**
     * Required. Describes how some of the technical X.509 fields in a certificate
     * should be populated.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters x509_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $x509_config = null;
    /**
     * Optional. The public key that corresponds to this config. This is, for
     * example, used when issuing
     * [Certificates][google.cloud.security.privateca.v1.Certificate], but not
     * when creating a self-signed
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * or
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * CSR.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.PublicKey public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $public_key = null;
    /**
     * Optional. When specified this provides a custom SKI to be used in the
     * certificate. This should only be used to maintain a SKI of an existing CA
     * originally created outside CA service, which was not generated using method
     * (1) described in RFC 5280 section 4.2.1.2.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateConfig.KeyId subject_key_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subject_key_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\SubjectConfig $subject_config
     *           Required. Specifies some of the values in a certificate that are related to
     *           the subject.
     *     @type \Google\Cloud\Security\PrivateCA\V1\X509Parameters $x509_config
     *           Required. Describes how some of the technical X.509 fields in a certificate
     *           should be populated.
     *     @type \Google\Cloud\Security\PrivateCA\V1\PublicKey $public_key
     *           Optional. The public key that corresponds to this config. This is, for
     *           example, used when issuing
     *           [Certificates][google.cloud.security.privateca.v1.Certificate], but not
     *           when creating a self-signed
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     *           or
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     *           CSR.
     *     @type \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\KeyId $subject_key_id
     *           Optional. When specified this provides a custom SKI to be used in the
     *           certificate. This should only be used to maintain a SKI of an existing CA
     *           originally created outside CA service, which was not generated using method
     *           (1) described in RFC 5280 section 4.2.1.2.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Specifies some of the values in a certificate that are related to
     * the subject.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateConfig.SubjectConfig subject_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\SubjectConfig|null
     */
    public function getSubjectConfig()
    {
        return $this->subject_config;
    }

    public function hasSubjectConfig()
    {
        return isset($this->subject_config);
    }

    public function clearSubjectConfig()
    {
        unset($this->subject_config);
    }

    /**
     * Required. Specifies some of the values in a certificate that are related to
     * the subject.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateConfig.SubjectConfig subject_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\SubjectConfig $var
     * @return $this
     */
    public function setSubjectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\SubjectConfig::class);
        $this->subject_config = $var;

        return $this;
    }

    /**
     * Required. Describes how some of the technical X.509 fields in a certificate
     * should be populated.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters x509_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\X509Parameters|null
     */
    public function getX509Config()
    {
        return $this->x509_config;
    }

    public function hasX509Config()
    {
        return isset($this->x509_config);
    }

    public function clearX509Config()
    {
        unset($this->x509_config);
    }

    /**
     * Required. Describes how some of the technical X.509 fields in a certificate
     * should be populated.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.X509Parameters x509_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\X509Parameters $var
     * @return $this
     */
    public function setX509Config($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\X509Parameters::class);
        $this->x509_config = $var;

        return $this;
    }

    /**
     * Optional. The public key that corresponds to this config. This is, for
     * example, used when issuing
     * [Certificates][google.cloud.security.privateca.v1.Certificate], but not
     * when creating a self-signed
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * or
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * CSR.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.PublicKey public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\PublicKey|null
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    public function hasPublicKey()
    {
        return isset($this->public_key);
    }

    public function clearPublicKey()
    {
        unset($this->public_key);
    }

    /**
     * Optional. The public key that corresponds to this config. This is, for
     * example, used when issuing
     * [Certificates][google.cloud.security.privateca.v1.Certificate], but not
     * when creating a self-signed
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * or
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * CSR.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.PublicKey public_key = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\PublicKey $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\PublicKey::class);
        $this->public_key = $var;

        return $this;
    }

    /**
     * Optional. When specified this provides a custom SKI to be used in the
     * certificate. This should only be used to maintain a SKI of an existing CA
     * originally created outside CA service, which was not generated using method
     * (1) described in RFC 5280 section 4.2.1.2.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateConfig.KeyId subject_key_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\KeyId|null
     */
    public function getSubjectKeyId()
    {
        return $this->subject_key_id;
    }

    public function hasSubjectKeyId()
    {
        return isset($this->subject_key_id);
    }

    public function clearSubjectKeyId()
    {
        unset($this->subject_key_id);
    }

    /**
     * Optional. When specified this provides a custom SKI to be used in the
     * certificate. This should only be used to maintain a SKI of an existing CA
     * originally created outside CA service, which was not generated using method
     * (1) described in RFC 5280 section 4.2.1.2.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CertificateConfig.KeyId subject_key_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\KeyId $var
     * @return $this
     */
    public function setSubjectKeyId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CertificateConfig\KeyId::class);
        $this->subject_key_id = $var;

        return $this;
    }

}

