<?php

namespace Balt\FreshDesk\Models\Requesters;

interface RequesterInterface
{

    public function getName(): ?string;

    public function getEmail(): ?string;

    public function getPhone(): ?string;
}