<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'accepted_if'          => 'O :attribute deve ser aceito quando :other for :value.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => 'O campo :attribute só pode conter letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve ser uma matriz.',
    'before'               => 'O campo :attribute deve ser uma data anterior :date.',
    'before_or_equal'      => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve ser entre :min e :max.',
        'file'    => 'O campo :attribute deve ser entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve ser entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'O campo :attribute de confirmação não confere.',
    'current_password'     => 'A senha está incorreta.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_equals'          => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format'          => 'O campo :attribute não está correto.',
    'declined'             => 'O :attribute deve ser recusado.',
    'declined_if'          => 'O :attribute deve ser recusado quando :other for :value.',
    'different'            => 'Os campos :attribute e :other devem ser diferentes.',
    'digits'               => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between'       => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions'           => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo :attribute campo tem um valor duplicado.',
    'doesnt_start_with'    => 'O :attribute não pode começar com um dos seguintes: :values.',
    'email'                => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'ends_with'            => 'O campo :attribute deve terminar com um dos seguintes: :values',
    'enum'                 => 'O :attribute selecionado é inválido.',
    'exists'               => 'O campo :attribute selecionado é inválido.',
    'file'                 => 'O campo :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file'    => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior que :value caracteres.',
        'array'   => 'O campo :attribute deve conter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file'    => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
        'array'   => 'O campo :attribute deve conter :value itens ou mais.',
    ],
    'image'                => 'O campo :attribute deve ser uma imagem.',
    'in'                   => 'O campo :attribute selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O campo :attribute deve ser um número inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4'                 => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O campo :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file'    => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor que :value caracteres.',
        'array'   => 'O campo :attribute deve conter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file'    => 'O campo :attribute deve ser menor ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor ou igual a :value caracteres.',
        'array'   => 'O campo :attribute não deve conter mais que :value itens.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não pode ser superior a :max.',
        'file'    => 'O campo :attribute não pode ser superior a :max kilobytes.',
        'string'  => 'O campo :attribute não pode ser superior a :max caracteres.',
        'array'   => 'O campo :attribute não pode ter mais do que :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ser pelo menos :min.',
        'file'    => 'O campo :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O campo :attribute deve ter pelo menos :min caracteres.',
        'array'   => 'O campo :attribute deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O campo :attribute selecionado é inválido.',
    'multiple_of'          => 'O campo :attribute deve ser um múltiplo de :value.',
    'not_regex'            => 'O campo :attribute possui um formato inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'password' => [
        'letters'          => 'O campo :attribute deve conter pelo menos uma letra.',
        'mixed'            => 'O campo :attribute deve conter pelo menos uma letra maiúscula e uma letra minúscula.',
        'numbers'          => 'O campo :attribute deve conter pelo menos um número.',
        'symbols'          => 'O campo :attribute deve conter pelo menos um símbolo.',
        'uncompromised'    => 'A senha que você inseriu em :attribute está em um vazamento de dados.'
                              . ' Por favor escolha uma senha diferente.',
    ],
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O campo :attribute tem um formato inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_array_keys'  => 'O campo :attribute deve conter entradas para: :values.',
    'required_if'          => 'O campo :attribute é obrigatório',
    'required_unless'      => 'O campo :attribute é obrigatório exceto quando :other for :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'prohibited'           => 'O campo :attribute é proibido.',
    'prohibited_if'        => 'O campo :attribute é proibido quando :other for :value.',
    'prohibited_unless'    => 'O campo :attribute é proibido exceto quando :other for :values.',
    'prohibits'            => 'O campo :attribute proíbe :other de estar presente.',
    'same'                 => 'Os campos :attribute e :other devem corresponder.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file'    => 'O campo :attribute deve ser :size kilobytes.',
        'string'  => 'O campo :attribute deve conter :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with'          => 'O campo :attribute deve começar com um dos seguintes valores: :values',
    'string'               => 'O campo :attribute deve ser uma string.',
    'timezone'             => 'O campo :attribute deve ser uma zona válida.',
    'unique'               => 'O campo :attribute já está sendo utilizado.',
    'uploaded'             => 'Ocorreu uma falha no upload do campo :attribute.',
    'url'                  => 'O campo :attribute tem um formato inválido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'bairro'                 => 'Bairro',
        'banco_id'               => 'Banco',
        'caracteristicas_do_material' => "Características do Material",
        'cep'                    => 'CEP',
        'cidade'                 => 'Cidade',
        'cliente_fornecedor_id'  => 'Cliente/Fornecedor',
        'cliente_id'             => 'Cliente',
        'cnpj'                   => 'CNPJ',
        'cofins'                 => 'Cofins',
        'complemento'            => 'Complemento',
        'company_name'           => 'Razão Social',
        'condicoes_gerais_de_fornecimento_descricao' => 'Condições Gerais de Fornecimento',
        'condicoes_complementares_de_fornecimento_descricao' => 'Condições Complementares de Fornecimento',
        'contato'                => 'Contato',
        'content'                => 'Conteúdo',
        'contribuicao_social'    => 'Contribuição Social',
        'controlador'            => 'Controlador',
        'controlador_outros'     => 'Outros em Controlador',
        'cor_outros'             => 'Nome da Cor',
        'created_at'             => 'Data de Cadastro',
        'current_password'       => 'Senha Atual',
        'day'                    => 'Dia',
        'date'                   => 'Data',
        'descricao'              => 'Descrição',
        'descricao_da_ferramenta' => 'Descrição da Ferramenta',
        'description'            => 'Descrição',
        'email'                  => 'Email',
        'endereco'               => 'Endereço',
        'especie'                => 'Espécie',
        'estado_id'              => 'Estado',
        'etapa_id'               => 'Etapa',
        'excerpt'                => 'Resumo',
        'fantasia'               => 'Nome Fantasia',
        'files[]'                => 'Arquivos',
        'first_name'             => 'Primeiro Nome',
        'formas_de_pagamento_descricao' => 'Forma de Pagamento',
        'frequencia'             => 'Frequência',
        'frequencia_outros'      => 'Outros em Frequência',
        'garantia_descricao'     => 'Garantia',
        'gender'                 => 'Gênero',
        'hour'                   => 'Hora',
        'hora_busca_clientes'    => 'Hora de Busca por Clientes',
        'hora_busca_produtos'    => 'Hora de Busca por Produtos',
        'icms'                   => 'ICMS',
        'image'                  => 'Imagem',
        'inscricao_municipal'    => 'Inscrição Municipal',
        'instalacao_descricao'   => 'Descrição',
        'kanban_quadro_id'       => 'Quadro',
        'last_name'              => 'Sobrenome',
        'lubrificante'           => 'Lubrificante',
        'lubrificante_outros'    => 'Outros em Lubrificante',
        'maquina'                => 'Máquina',
        'maquina_outros'         => 'Outros em Máquina',
        'marital_status'         => 'Estado Civil',
        'medidas_do_material'    => 'Medidas do Material',
        'message'                => 'Mensagem',
        'minute'                 => 'Minuto',
        'mobile'                 => 'Celular',
        'month'                  => 'Mês',
        'name'                   => 'Nome',
        'nationality'            => 'Nacionalidade',
        'neighborhood'           => 'Bairro',
        'numero'                 => 'Número',
        'ordem_de_servico'       => 'Ordem de Serviço',
        'owner'                  => 'Proprietário',
        'password'               => 'Senha',
        'password_1'             => 'Senha',
        'password_2'             => 'Repetir Senha',
        'password_confirmation'  => 'Confirmação da Senha',
        'phone'                  => 'Telefone',
        'pis'                    => 'PIS',
        'produto'                => 'Produto',
        'produto_id'             => 'Produto',
        'profession'             => 'Profissão',
        'quantidade'             => 'Quantidade',
        'razao_social'           => 'Razão Social',
        'rede'                   => 'Rede',
        'responsavel_pela_ordem_de_servico' => 'Responsável Pela Ordem de Serviço',
        'second'                 => 'Segundo',
        'sex'                    => 'Sexo',
        'socio_validade'         => 'Validade',
        'state'                  => 'Estado',
        'street'                 => 'Rua',
        'subject'                => 'Assunto',
        'telefone'               => 'Telefone',
        'tensao'                 => 'Tensão',
        'text'                   => 'Texto',
        'time'                   => 'Hora',
        'title'                  => 'Título',
        'transformador'          => 'Transformador',
        'today'                  => 'Hoje',
        'tubo'                   => 'Tubo',
        'tubo_outros'            => 'Outros em Tubo',
        'tubo_capacidade_maxima' => 'Capaciade Máxima',
        'username'               => 'Usuário',
        'valor_total'            => 'Valor Total',
        'value'                  => 'Valor',
        'year'                   => 'Ano',
        'zipcode'                => 'CEP',
        '1'                      => 'Ativo',
    ],

];
