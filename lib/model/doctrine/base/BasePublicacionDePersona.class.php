<?php

/**
 * BasePublicacionDePersona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $persona_id
 * @property string $tipo_publicacion
 * @property string $nombre_revista
 * @property string $titulo_publicacion
 * @property integer $anio
 * @property integer $volumen
 * @property integer $numero
 * @property boolean $es_isi
 * @property Persona $Persona
 * 
 * @method integer              getId()                 Returns the current record's "id" value
 * @method integer              getPersonaId()          Returns the current record's "persona_id" value
 * @method string               getTipoPublicacion()    Returns the current record's "tipo_publicacion" value
 * @method string               getNombreRevista()      Returns the current record's "nombre_revista" value
 * @method string               getTituloPublicacion()  Returns the current record's "titulo_publicacion" value
 * @method integer              getAnio()               Returns the current record's "anio" value
 * @method integer              getVolumen()            Returns the current record's "volumen" value
 * @method integer              getNumero()             Returns the current record's "numero" value
 * @method boolean              getEsIsi()              Returns the current record's "es_isi" value
 * @method Persona              getPersona()            Returns the current record's "Persona" value
 * @method PublicacionDePersona setId()                 Sets the current record's "id" value
 * @method PublicacionDePersona setPersonaId()          Sets the current record's "persona_id" value
 * @method PublicacionDePersona setTipoPublicacion()    Sets the current record's "tipo_publicacion" value
 * @method PublicacionDePersona setNombreRevista()      Sets the current record's "nombre_revista" value
 * @method PublicacionDePersona setTituloPublicacion()  Sets the current record's "titulo_publicacion" value
 * @method PublicacionDePersona setAnio()               Sets the current record's "anio" value
 * @method PublicacionDePersona setVolumen()            Sets the current record's "volumen" value
 * @method PublicacionDePersona setNumero()             Sets the current record's "numero" value
 * @method PublicacionDePersona setEsIsi()              Sets the current record's "es_isi" value
 * @method PublicacionDePersona setPersona()            Sets the current record's "Persona" value
 * 
 * @package    postulacion_interna
 * @subpackage model
 * @author     Miguel Alcaino
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublicacionDePersona extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('publicacion_de_persona');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('persona_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tipo_publicacion', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('nombre_revista', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('titulo_publicacion', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('anio', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('volumen', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('numero', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('es_isi', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Persona', array(
             'local' => 'persona_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}