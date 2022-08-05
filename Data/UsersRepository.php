<?php
class UsersRepository {
    private $response;
    private function getResponse($response) {
        $response = [
            [
                'nome' => 'João Silveira Cunha',
                'email' => 'joao@example.com',
                'cpf' => '123.445.654-45',
                'telefone' => '(51) 9943-2454',
                'tipo' => 'F',
                'saldo' => 3500.56,
                'codigo' => 99,
                'banco' => 'Nubank Brasil Ltd',
                'agencia' => 10245,
            ],
            [
                'nome' => 'Marcelo Adalberto',
                'email' => 'marcelo@example.com',
                'cpf' => '723.545.354-45',
                'telefone' => '(51) 9845-2431',
                'tipo' => 'F',
                'saldo' => 5000.31,
                'codigo' => 102,
                'banco' => 'Banco do Brasil',
                'agencia' => 10378,
            ],
            [
                'nome' => 'Eleonor Prass',
                'email' => 'elo3@example.com',
                'cpf' => '093.485.554-45',
                'telefone' => '(51) 9923-6360',
                'tipo' => 'J',
                'saldo' => 2000.82,
                'codigo' => 105,
                'banco' => 'Bradesco',
                'agencia' => 12450,
            ]
        ];
        return $response;
    }

    public function getUsers($users) {
        $this->response = $this->getResponse($this->response);
        for ($i = 0; $i < count($this->response); $i++) {
            $this->response[$i]['id'] = $i;
            $users[] = new User($this->response[$i]);
        }
        return $users;
    }

}