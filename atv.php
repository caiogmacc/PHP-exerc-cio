<?php

$usuarios = [
    [
        'nome' => 'João',
        'email' => 'email@email.com',
        'status' => 'ativo',
        'encomendas' => [
            [
                'nome' => 'Camiseta',
                'codigoRastramento' => 'ABC-ASC-123',
                'status' => 'em trânsito'
            ]
        ]
    ],
    [
        'nome' => 'Maria',
        'email' => 'aria@email.com',
        'status' => 'inativo',
        'encomendas' => [
            [
                'nome' => 'Teclado',
                'codigoRastramento' => 'XYZ-ASC-111',
                'status' => 'entregue'
            ]
        ]
    ],
    [
        'nome' => 'José',
        'email' => 'jose@email.com',
        'status' => 'ativo',
        'encomendas' => [
            [
                'nome' => 'Monitor',
                'codigoRastramento' => 'GGG-CCC-980',
                'status' => 'barrado'
            ],
            [
                'nome' => 'Computador',
                'codigoRastramento' => 'GGG-CCC-981',
                'status' => 'entregue'
            ]
        ]
    ],
    [
        'nome' => 'Pedro',
        'email' => 'pedro@email.com',
        'status' => 'inativo',
        'encomendas' => [
            [
                'nome' => 'Fone de ouvido',
                'codigoRastramento' => 'KLI-CIC-981',
                'status' => 'entregue'
            ]
        ]
    ],
    [
        'nome' => 'Ana',
        'email' => 'ana@email.com',
        'status' => 'ativo',
        'encomendas' => [
            [
                'nome' => 'Lanterna',
                'codigoRastramento' => 'FFF-CCC-999',
                'status' => 'entregue'
            ]
        ]
    ]
];

$ativos = [];

foreach ($usuarios as $user) {
    if ($user['status'] === 'ativo') {
        $ativos[] = $user;
    }
}

function findOrderStatus($ativos, $cdgRastreado) {
    foreach ($ativos as $user) {
        foreach ($user['encomendas'] as $order) {
            if ($order['codigoRastramento'] === $cdgRastreado) {
                return "{$user['nome']}, o status de seu pedido \"{$order['nome']}\" com código de rastreamento {$cdgRastreado} é: {$order['status']}.\n";
            }
        }
    }
    return "Pedido não encontrado.";
}

echo findOrderStatus($ativos, 'ABC-ASC-123');
echo findOrderStatus($ativos, 'GGG-CCC-980');

?>
