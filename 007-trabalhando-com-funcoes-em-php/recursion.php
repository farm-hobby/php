<?php 
    $hierarquia = [
        [
            'cargo' => 'CEO',
            'subordinados' => [
                [
                    'cargo' => 'Diretor Comercial',
                    'subordinados' => [
                        [
                            'cargo' => 'Gerente de Vendas'
                        ]
                    ]
                ],
                [
                    'cargo' => 'Diretor Vendas',
                    'subordinados' => [
                        [
                            'cargo' => 'Gerente de Contas a Pagar'
                        ]
                    ]
                ]
            ]
        ]
    ];

    function cargoTree($funcoes) {
        
        $html = '<ul>';
        
        foreach($funcoes as $funcao) {

            $html .= '<li>';

            $html .= $funcao['cargo'];

            if (isset($funcao['subordinados']) && count($funcao['subordinados']) > 0) {
                $html .= cargoTree($funcao['subordinados']);
            }

            $html .= '</li>';

        }

        $html .= '</ul>'; 

        return $html;
    }

    echo cargoTree($hierarquia);
?>