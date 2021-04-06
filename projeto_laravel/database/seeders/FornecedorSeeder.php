<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'Fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' =>  'Fornecedor200',
            'site' =>  'Fornecedor200.com.br',
            'uf' =>  'RS',
            'email' =>  'contato@fornecedor200.com.br',
        ]);

        DB::table('fornecedores')->insert([
            'nome' =>  'Fornecedor300',
            'site' =>  'Fornecedor300.com.br',
            'uf' =>  'SP',
            'email' =>  'contato@fornecedor300.com.br',
        ]);
    }
}
