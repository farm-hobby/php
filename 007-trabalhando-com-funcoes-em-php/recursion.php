<?php 
    $hierarquia = array(
        [
            'cargo' => 'CEO',
            'subordinados' => array(
                [
                    'cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        [
                            'cargo' => 'Gerente de Vendas'
                        ]
                    )
                ],
                [
                    'cargo' => 'Diretor Vendas',
                    'subordinados' => array(
                        [
                            'cargo' => 'Gerente de Contas a Pagar'
                        ]
                    )
                ]
            )
        ]
    );

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