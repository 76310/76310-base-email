<?php
/**
 * Domaine
 *
 * PHP version 5
 *
 * @category Class
 * @package  sat\BaseEmail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sat.Email.Base.Webservice
 *
 * Description de l'API sat.Email.Base.Webservice
 *
 * OpenAPI spec version: v1
 * Contact: help@76310.fr
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace sat\BaseEmail\Model;

use \ArrayAccess;
use \sat\BaseEmail\ObjectSerializer;

/**
 * Domaine Class Doc Comment
 *
 * @category Class
 * @package  sat\BaseEmail
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Domaine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domaine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nom' => 'string',
        're_ecriture' => 'string',
        'frequence' => 'int',
        'score_frequence' => 'int',
        'statut' => 'int',
        'date_validation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nom' => null,
        're_ecriture' => null,
        'frequence' => 'int32',
        'score_frequence' => 'int32',
        'statut' => 'int32',
        'date_validation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'nom' => 'nom',
        're_ecriture' => 'reEcriture',
        'frequence' => 'frequence',
        'score_frequence' => 'scoreFrequence',
        'statut' => 'statut',
        'date_validation' => 'dateValidation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nom' => 'setNom',
        're_ecriture' => 'setReEcriture',
        'frequence' => 'setFrequence',
        'score_frequence' => 'setScoreFrequence',
        'statut' => 'setStatut',
        'date_validation' => 'setDateValidation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nom' => 'getNom',
        're_ecriture' => 'getReEcriture',
        'frequence' => 'getFrequence',
        'score_frequence' => 'getScoreFrequence',
        'statut' => 'getStatut',
        'date_validation' => 'getDateValidation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUT_0 = 0;
    const STATUT_1 = 1;
    const STATUT_MINUS_1 = -1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatutAllowableValues()
    {
        return [
            self::STATUT_0,
            self::STATUT_1,
            self::STATUT_MINUS_1,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['nom'] = isset($data['nom']) ? $data['nom'] : null;
        $this->container['re_ecriture'] = isset($data['re_ecriture']) ? $data['re_ecriture'] : null;
        $this->container['frequence'] = isset($data['frequence']) ? $data['frequence'] : null;
        $this->container['score_frequence'] = isset($data['score_frequence']) ? $data['score_frequence'] : null;
        $this->container['statut'] = isset($data['statut']) ? $data['statut'] : null;
        $this->container['date_validation'] = isset($data['date_validation']) ? $data['date_validation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatutAllowableValues();
        if (!is_null($this->container['statut']) && !in_array($this->container['statut'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'statut', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom
     *
     * @param string $nom nom
     *
     * @return $this
     */
    public function setNom($nom)
    {
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets re_ecriture
     *
     * @return string
     */
    public function getReEcriture()
    {
        return $this->container['re_ecriture'];
    }

    /**
     * Sets re_ecriture
     *
     * @param string $re_ecriture re_ecriture
     *
     * @return $this
     */
    public function setReEcriture($re_ecriture)
    {
        $this->container['re_ecriture'] = $re_ecriture;

        return $this;
    }

    /**
     * Gets frequence
     *
     * @return int
     */
    public function getFrequence()
    {
        return $this->container['frequence'];
    }

    /**
     * Sets frequence
     *
     * @param int $frequence frequence
     *
     * @return $this
     */
    public function setFrequence($frequence)
    {
        $this->container['frequence'] = $frequence;

        return $this;
    }

    /**
     * Gets score_frequence
     *
     * @return int
     */
    public function getScoreFrequence()
    {
        return $this->container['score_frequence'];
    }

    /**
     * Sets score_frequence
     *
     * @param int $score_frequence score_frequence
     *
     * @return $this
     */
    public function setScoreFrequence($score_frequence)
    {
        $this->container['score_frequence'] = $score_frequence;

        return $this;
    }

    /**
     * Gets statut
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->container['statut'];
    }

    /**
     * Sets statut
     *
     * @param int $statut statut
     *
     * @return $this
     */
    public function setStatut($statut)
    {
        $allowedValues = $this->getStatutAllowableValues();
        if (!is_null($statut) && !in_array($statut, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'statut', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statut'] = $statut;

        return $this;
    }

    /**
     * Gets date_validation
     *
     * @return string
     */
    public function getDateValidation()
    {
        return $this->container['date_validation'];
    }

    /**
     * Sets date_validation
     *
     * @param string $date_validation date_validation
     *
     * @return $this
     */
    public function setDateValidation($date_validation)
    {
        $this->container['date_validation'] = $date_validation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


