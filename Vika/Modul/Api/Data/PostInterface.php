<?php

namespace Vika\Modul\Api\Data;

interface PostInterface
{
    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const EMAIL = 'email';
    const SEX = 'sex';
    const LASTNAME = 'lastname';


    public function getId();
    public function getName();
    public function getEmail();
    public function getSex();
    public function getLastname();
}