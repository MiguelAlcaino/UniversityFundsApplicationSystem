<?php

/**
 * BaseRecurso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $persona_concurso_id
 * @property integer $item_concurso_id
 * @property integer $total
 * @property ItemConcurso $ItemConcurso
 * @property PersonaConcurso $PersonaConcurso
 * @property Doctrine_Collection $DetallesRecurso
 * @property Doctrine_Collection $ArchivosRecurso
 * @property Doctrine_Collection $AjustesRecurso
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method integer             getPersonaConcursoId()   Returns the current record's "persona_concurso_id" value
 * @method integer             getItemConcursoId()      Returns the current record's "item_concurso_id" value
 * @method integer             getTotal()               Returns the current record's "total" value
 * @method ItemConcurso        getItemConcurso()        Returns the current record's "ItemConcurso" value
 * @method PersonaConcurso     getPersonaConcurso()     Returns the current record's "PersonaConcurso" value
 * @method Doctrine_Collection getDetallesRecurso()     Returns the current record's "DetallesRecurso" collection
 * @method Doctrine_Collection getArchivosRecurso()     Returns the current record's "ArchivosRecurso" collection
 * @method Doctrine_Collection getAjustesRecurso()      Returns the current record's "AjustesRecurso" collection
 * @method Recurso             setId()                  Sets the current record's "id" value
 * @method Recurso             setPersonaConcursoId()   Sets the current record's "persona_concurso_id" value
 * @method Recurso             setItemConcursoId()      Sets the current record's "item_concurso_id" value
 * @method Recurso             setTotal()               Sets the current record's "total" value
 * @method Recurso             setItemConcurso()        Sets the current record's "ItemConcurso" value
 * @method Recurso             setPersonaConcurso()     Sets the current record's "PersonaConcurso" value
 * @method Recurso             setDetallesRecurso()     Sets the current record's "DetallesRecurso" collection
 * @method Recurso             setArchivosRecurso()     Sets the current record's "ArchivosRecurso" collection
 * @method Recurso             setAjustesRecurso()      Sets the current record's "AjustesRecurso" collection
 * 
 * @package    postulacion_interna
 * @subpackage model
 * @author     Miguel Alcaino
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRecurso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('recurso');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('persona_concurso_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('item_concurso_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('total', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ItemConcurso', array(
             'local' => 'item_concurso_id',
             'foreign' => 'id'));

        $this->hasOne('PersonaConcurso', array(
             'local' => 'persona_concurso_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('DetalleRecurso as DetallesRecurso', array(
             'local' => 'id',
             'foreign' => 'recurso_id'));

        $this->hasMany('ArchivoRecurso as ArchivosRecurso', array(
             'local' => 'id',
             'foreign' => 'recurso_id'));

        $this->hasMany('AjusteRecurso as AjustesRecurso', array(
             'local' => 'id',
             'foreign' => 'recurso_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}