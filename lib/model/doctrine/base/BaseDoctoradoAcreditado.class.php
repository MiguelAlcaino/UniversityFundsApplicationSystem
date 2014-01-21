<?php

/**
 * BaseDoctoradoAcreditado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $Tesistas
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method string              getNombre()   Returns the current record's "nombre" value
 * @method Doctrine_Collection getTesistas() Returns the current record's "Tesistas" collection
 * @method DoctoradoAcreditado setId()       Sets the current record's "id" value
 * @method DoctoradoAcreditado setNombre()   Sets the current record's "nombre" value
 * @method DoctoradoAcreditado setTesistas() Sets the current record's "Tesistas" collection
 * 
 * @package    postulacion_interna
 * @subpackage model
 * @author     Miguel Alcaino
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDoctoradoAcreditado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('doctorado_acreditado');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Tesista as Tesistas', array(
             'local' => 'id',
             'foreign' => 'doctorado_acreditado_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}