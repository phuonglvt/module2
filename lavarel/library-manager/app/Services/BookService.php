<?php
namespace App\Services;

interface BookService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);
    public function show($request);
    public function edit($request, $id);
    public function store($request);
}