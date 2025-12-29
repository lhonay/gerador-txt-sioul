<?php
// Definição dos campos
$fieldDefinitions = [
    0 => ['name' => 'OS (Laboratório)', 'type' => 'text', 'required' => true],
    1 => ['name' => 'Quantidade', 'type' => 'enum', 'values' => [1 => 'Ambos', 2 => 'Direito', 3 => 'Esquerdo']],
    2 => ['name' => 'Código Cliente', 'type' => 'text', 'required' => true],
    3 => ['name' => 'Esf OD', 'type' => 'decimal'],
    4 => ['name' => 'Cil OD', 'type' => 'decimal'],
    5 => ['name' => 'Eixo OD', 'type' => 'number', 'min' => 0, 'max' => 180],
    6 => ['name' => 'Adição OD', 'type' => 'decimal'],
    7 => ['name' => 'Esf OE', 'type' => 'decimal'],
    8 => ['name' => 'Cil OE', 'type' => 'decimal'],
    9 => ['name' => 'Eixo OE', 'type' => 'number', 'min' => 0, 'max' => 180],
    10 => ['name' => 'Adição OE', 'type' => 'decimal'],
    11 => ['name' => 'Prisma OD', 'type' => 'decimal'],
    12 => ['name' => 'Eixo Prisma OD', 'type' => 'number'],
    13 => ['name' => 'Prisma2 OD', 'type' => 'decimal'],
    14 => ['name' => 'Eixo PR2 OD', 'type' => 'number'],
    15 => ['name' => 'Prisma OE', 'type' => 'decimal'],
    16 => ['name' => 'Eixo Prisma OE', 'type' => 'number'],
    17 => ['name' => 'Prisma2 OE', 'type' => 'decimal'],
    18 => ['name' => 'Eixo PR2 OE', 'type' => 'number'],
    19 => ['name' => 'DNP-L OD', 'type' => 'decimal'],
    20 => ['name' => 'DNP-P OD', 'type' => 'decimal'],
    21 => ['name' => 'DNP-L OE', 'type' => 'decimal'],
    22 => ['name' => 'DNP-P OE', 'type' => 'decimal'],
    23 => ['name' => 'Shape ID', 'type' => 'text'],
    24 => ['name' => 'Diâmetro Padrão', 'type' => 'decimal'],
    25 => ['name' => 'Número Caixa', 'type' => 'text'],
    26 => ['name' => 'Tipo Armação', 'type' => 'enum', 'values' => [1 => 'Metal', 2 => 'Fio Nylon', 3 => 'Parafusada', 4 => 'Desconhecida']],
    27 => ['name' => 'DBL - Ponte', 'type' => 'decimal'],
    28 => ['name' => 'P+A', 'type' => 'decimal'],
    29 => ['name' => 'DV - Altura', 'type' => 'decimal'],
    30 => ['name' => 'DM - Diagonal', 'type' => 'decimal'],
    31 => ['name' => 'APUP OD', 'type' => 'decimal'],
    32 => ['name' => 'APUP OE', 'type' => 'decimal'],
    33 => ['name' => 'APEL OD', 'type' => 'decimal'],
    34 => ['name' => 'APEL OE', 'type' => 'decimal'],
    35 => ['name' => 'Código Produto OD', 'type' => 'text'],
    36 => ['name' => 'Código Produto OE', 'type' => 'text'],
    37 => ['name' => 'Cód. Barras Bloco OD', 'type' => 'text'],
    38 => ['name' => 'Cód. Barras Bloco OE', 'type' => 'text'],
    39 => ['name' => 'Crib OD', 'type' => 'text'],
    40 => ['name' => 'Crib OE', 'type' => 'text'],
    41 => ['name' => 'Observações', 'type' => 'text'],
    42 => ['name' => 'Ref. Pedido Cliente', 'type' => 'text'],
    43 => ['name' => 'Cód. Pedido Cliente', 'type' => 'text'],
    44 => ['name' => 'Sequência Pedido', 'type' => 'text'],
    45 => ['name' => 'Impressora', 'type' => 'enum', 'values' => [1 => 'Padrão', 2 => 'Impressora 2']],
    46 => ['name' => 'Curva Base OD', 'type' => 'decimal'],
    47 => ['name' => 'Curva Base OE', 'type' => 'decimal'],
    48 => ['name' => 'Raio OD', 'type' => 'decimal'],
    49 => ['name' => 'Raio OE', 'type' => 'decimal'],
    50 => ['name' => 'Espessura Bloco OD', 'type' => 'decimal'],
    51 => ['name' => 'Espessura Bloco OE', 'type' => 'decimal'],
    52 => ['name' => 'Curva Interna OD', 'type' => 'decimal'],
    53 => ['name' => 'Curva Interna OE', 'type' => 'decimal'],
    54 => ['name' => 'Índice Refração OD', 'type' => 'decimal'],
    55 => ['name' => 'Índice Refração OE', 'type' => 'decimal'],
    56 => ['name' => 'Altura Elipse OD', 'type' => 'decimal'],
    57 => ['name' => 'Altura Elipse OE', 'type' => 'decimal'],
    58 => ['name' => 'Esp. Mín. Borda OD', 'type' => 'decimal'],
    59 => ['name' => 'Esp. Mín. Borda OE', 'type' => 'decimal'],
    60 => ['name' => 'Esp. Mín. Centro OD', 'type' => 'decimal'],
    61 => ['name' => 'Esp. Mín. Centro OE', 'type' => 'decimal'],
    62 => ['name' => 'Descent. Horiz. OD', 'type' => 'decimal'],
    63 => ['name' => 'Descent. Horiz. OE', 'type' => 'decimal'],
    64 => ['name' => 'Diâmetro OD', 'type' => 'decimal'],
    65 => ['name' => 'Diâmetro OE', 'type' => 'decimal'],
    66 => ['name' => 'Cód. Tratamento 01', 'type' => 'text'],
    67 => ['name' => 'Cód. Tratamento 02', 'type' => 'text'],
    68 => ['name' => 'Cód. Tratamento 03', 'type' => 'text'],
    69 => ['name' => 'Cód. Tratamento 04', 'type' => 'text'],
    70 => ['name' => 'Cód. Tratamento 05', 'type' => 'text'],
    71 => ['name' => 'Abrev. Nome Cliente', 'type' => 'text'],
    72 => ['name' => 'Active Auto Calc', 'type' => 'enum', 'values' => [0 => 'Não', 1 => 'Sim']],
    73 => ['name' => 'Código OptiClick', 'type' => 'text'],
    74 => ['name' => 'DHA - Largura Armação', 'type' => 'decimal'],
    75 => ['name' => 'PANTO / Nome Paciente', 'type' => 'text'],
    76 => ['name' => 'ZTILT / PANTO', 'type' => 'text'],
    77 => ['name' => 'BVD / ZTILT', 'type' => 'text'],
    78 => ['name' => 'Nome Paciente / BVD', 'type' => 'text'],
    79 => ['name' => 'Anamnese Ocupação', 'type' => 'text'],
    80 => ['name' => 'Anamnese Hobby', 'type' => 'text'],
    81 => ['name' => 'Anamnese Necess. Visual', 'type' => 'number'],
    82 => ['name' => 'Anamnese Horas Direção', 'type' => 'number'],
    83 => ['name' => 'Anamnese Horas TV', 'type' => 'number'],
    84 => ['name' => 'Anamnese Horas PC', 'type' => 'number'],
    85 => ['name' => 'Anamnese Horas Leitura', 'type' => 'number'],
    86 => ['name' => 'Anamnese Nome Cliente', 'type' => 'text'],
    87 => ['name' => 'ID Empresa', 'type' => 'text'],
    88 => ['name' => 'Centro de Custo', 'type' => 'text'],
    89 => ['name' => 'Finalidade Pedido', 'type' => 'text'],
    90 => ['name' => 'Engraving 01', 'type' => 'text'],
    91 => ['name' => 'Engraving 02', 'type' => 'text'],
    92 => ['name' => 'Engraving 03', 'type' => 'text'],
    93 => ['name' => 'Engraving 04', 'type' => 'text'],
    94 => ['name' => 'Lente Pronta OD', 'type' => 'enum', 'values' => [0 => 'Não', 1 => 'Sim']],
    95 => ['name' => 'Lente Pronta OE', 'type' => 'enum', 'values' => [0 => 'Não', 1 => 'Sim']],
    96 => ['name' => 'FWD', 'type' => 'decimal'],
    97 => ['name' => 'NWD', 'type' => 'decimal'],
    98 => ['name' => 'VMAP', 'type' => 'text'],
    99 => ['name' => 'Material Bloco OD', 'type' => 'enum', 'values' => [0 => 'Undefined', 1 => 'Plastic', 2 => 'Polycarbonate', 3 => 'Glass', 4 => 'Pattern', 5 => 'Hi-Index', 6 => 'Trivex', 7 => 'Tribrid']],
    100 => ['name' => 'Material Bloco OE', 'type' => 'enum', 'values' => [0 => 'Undefined', 1 => 'Plastic', 2 => 'Polycarbonate', 3 => 'Glass', 4 => 'Pattern', 5 => 'Hi-Index', 6 => 'Trivex', 7 => 'Tribrid']],
    101 => ['name' => 'Diâmetro Bloco OD', 'type' => 'decimal'],
    102 => ['name' => 'Diâmetro Bloco OE', 'type' => 'decimal'],
    103 => ['name' => 'Nome Médico', 'type' => 'text'],
    104 => ['name' => 'Nome Vendedor', 'type' => 'text'],
    105 => ['name' => 'Data Entrega', 'type' => 'date'],
    106 => ['name' => 'CORRLEN OD', 'type' => 'decimal'],
    107 => ['name' => 'CORRLEN OE', 'type' => 'decimal'],
    108 => ['name' => 'ATO OD', 'type' => 'text'],
    109 => ['name' => 'ATO OE', 'type' => 'text'],
    110 => ['name' => 'CLAGE - Idade', 'type' => 'number'],
    111 => ['name' => 'Código Cliente 2', 'type' => 'text'],
    112 => ['name' => 'TEXT_PR01', 'type' => 'text'],
    113 => ['name' => 'TEXT_PR02', 'type' => 'text'],
    114 => ['name' => 'TEXT_PR03', 'type' => 'text'],
];

// Função de validação
function validateField($value, $fieldDef) {
    $errors = [];
    $warnings = [];
    $value = trim($value);
    
    // Campo obrigatório
    if (isset($fieldDef['required']) && $fieldDef['required'] && empty($value)) {
        $errors[] = 'Campo obrigatório';
        return ['valid' => false, 'errors' => $errors, 'warnings' => $warnings];
    }
    
    if (empty($value)) {
        return ['valid' => true, 'errors' => $errors, 'warnings' => $warnings];
    }
    
    switch ($fieldDef['type']) {
        case 'number':
            if (!preg_match('/^-?\d+$/', $value)) {
                $errors[] = 'Deve ser número inteiro';
            } else {
                $num = intval($value);
                if (isset($fieldDef['min']) && $num < $fieldDef['min']) {
                    $errors[] = "Valor mínimo: {$fieldDef['min']}";
                }
                if (isset($fieldDef['max']) && $num > $fieldDef['max']) {
                    $errors[] = "Valor máximo: {$fieldDef['max']}";
                }
            }
            break;
            
        case 'decimal':
            if (!preg_match('/^-?\d+([.,]\d+)?$/', $value)) {
                $errors[] = 'Deve ser número decimal';
            }
            break;
            
        case 'enum':
            if (isset($fieldDef['values'])) {
                $validValues = array_keys($fieldDef['values']);
                if (!in_array($value, array_map('strval', $validValues))) {
                    $options = [];
                    foreach ($fieldDef['values'] as $k => $v) {
                        $options[] = "$k ($v)";
                    }
                    $errors[] = 'Valores válidos: ' . implode(', ', $options);
                }
            }
            break;
            
        case 'date':
            if (!preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $value)) {
                $warnings[] = 'Formato esperado: DD/MM/YYYY';
            }
            break;
    }
    
    return ['valid' => count($errors) === 0, 'errors' => $errors, 'warnings' => $warnings];
}

// Função para processar um registro
function processRecord($values, $lineNumber = 1) {
    global $fieldDefinitions;
    
    $fields = [];
    $recordValid = true;
    $recordErrors = 0;
    $recordWarnings = 0;
    
    $maxFields = max(count($values), count($fieldDefinitions));
    
    for ($i = 0; $i < $maxFields; $i++) {
        $rawValue = isset($values[$i]) ? trim($values[$i]) : '';
        $fieldDef = isset($fieldDefinitions[$i]) ? $fieldDefinitions[$i] : ['name' => "Campo $i", 'type' => 'text'];
        $validation = validateField($rawValue, $fieldDef);
        
        if (!$validation['valid']) {
            $recordValid = false;
            $recordErrors++;
        }
        $recordWarnings += count($validation['warnings']);
        
        $fields[] = [
            'index' => $i,
            'name' => $fieldDef['name'],
            'value' => $rawValue,
            'validation' => $validation,
            'fieldDef' => $fieldDef
        ];
    }
    
    return [
        'lineNumber' => $lineNumber,
        'fields' => $fields,
        'valid' => $recordValid,
        'errors' => $recordErrors,
        'warnings' => $recordWarnings
    ];
}

// Processar dados
$records = [];
$fileName = '';
$totalValid = 0;
$totalInvalid = 0;
$totalWarnings = 0;
$inputMode = 'upload'; // 'upload', 'manual' ou 'paste'

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processar upload de arquivo
    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
        $inputMode = 'upload';
        $file = $_FILES['arquivo'];
        $fileName = $file['name'];
        $content = file_get_contents($file['tmp_name']);
        $lines = array_filter(explode("\n", $content), 'trim');
        
        foreach ($lines as $lineNum => $line) {
            $values = str_getcsv($line);
            $record = processRecord($values, $lineNum + 1);
            
            if ($record['valid']) {
                $totalValid++;
            } else {
                $totalInvalid++;
            }
            $totalWarnings += $record['warnings'];
            
            $records[] = $record;
        }
    }
    // Processar dados colados
    elseif (isset($_POST['paste_submit']) && !empty(trim($_POST['paste_data']))) {
        $inputMode = 'paste';
        $content = $_POST['paste_data'];
        $lines = array_filter(explode("\n", $content), function($line) {
            return trim($line) !== '';
        });
        
        foreach ($lines as $lineNum => $line) {
            // Suporta tanto vírgula quanto tab como separador
            if (strpos($line, "\t") !== false) {
                $values = explode("\t", $line);
            } else {
                $values = str_getcsv($line);
            }
            
            $record = processRecord($values, $lineNum + 1);
            
            if ($record['valid']) {
                $totalValid++;
            } else {
                $totalInvalid++;
            }
            $totalWarnings += $record['warnings'];
            
            $records[] = $record;
        }
    }
    // Gerar arquivo TXT do formulário manual
    elseif (isset($_POST['generate_txt'])) {
        $values = [];
        
        // Coletar todos os valores do formulário
        foreach ($fieldDefinitions as $idx => $def) {
            $fieldName = 'field_' . $idx;
            $values[$idx] = isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
        }
        
        // Criar arquivo CSV usando buffer de memória
        $output = fopen('php://temp', 'r+');
        
        // Adicionar BOM UTF-8 para compatibilidade com Excel
        fwrite($output, "\xEF\xBB\xBF");
        
        // Escrever linha CSV
        fputcsv($output, $values, ',', '"');
        
        // Obter conteúdo
        rewind($output);
        $csvContent = stream_get_contents($output);
        fclose($output);
        
        // Definir headers para download
        $filename = 'prescricao_' . date('Ymd_His') . '.txt';
        header('Content-Type: text/plain; charset=UTF-8');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . strlen($csvContent));
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        
        // Output do conteúdo
        echo $csvContent;
        exit;
    }
    // Processar formulário manual
    elseif (isset($_POST['manual_submit'])) {
        $inputMode = 'manual';
        $values = [];
        
        // Coletar todos os valores do formulário
        foreach ($fieldDefinitions as $idx => $def) {
            $fieldName = 'field_' . $idx;
            $values[$idx] = isset($_POST[$fieldName]) ? $_POST[$fieldName] : '';
        }
        
        $record = processRecord($values, 1);
        
        if ($record['valid']) {
            $totalValid++;
        } else {
            $totalInvalid++;
        }
        $totalWarnings += $record['warnings'];
        
        $records[] = $record;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador Óptico - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    :root {
        --primary: #0891b2;
        --success: #22c55e;
        --warning: #f59e0b;
        --danger: #ef4444;
    }

    body {
        background: #f8fafc;
    }

    .card {
        border: none;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .header-gradient {
        background: linear-gradient(135deg, #0891b2, #14b8a6);
    }

    .stat-card {
        transition: transform 0.2s;
    }

    .stat-card:hover {
        transform: translateY(-2px);
    }

    .badge-valid {
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
    }

    .badge-invalid {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
    }

    .badge-warning {
        background: rgba(245, 158, 11, 0.1);
        color: #f59e0b;
    }

    .field-card {
        font-size: 0.85rem;
    }

    .field-card.has-error {
        background: rgba(239, 68, 68, 0.05);
        border-color: rgba(239, 68, 68, 0.3);
    }

    .field-card.has-warning {
        background: rgba(245, 158, 11, 0.05);
        border-color: rgba(245, 158, 11, 0.3);
    }

    .field-card.has-value {
        background: #f1f5f9;
    }

    .field-card.empty {
        background: #fafafa;
        opacity: 0.6;
    }

    .record-header {
        cursor: pointer;
    }

    .record-header:hover {
        background: #f8fafc;
    }

    .upload-area {
        border: 2px dashed #cbd5e1;
        border-radius: 12px;
        padding: 3rem;
        text-align: center;
        transition: all 0.2s;
    }

    .upload-area:hover {
        border-color: var(--primary);
        background: rgba(8, 145, 178, 0.02);
    }

    .table-reference th {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
    }

    .collapse-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s;
    }

    .collapse-content.show {
        max-height: 5000px;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #64748b;
    }

    .nav-tabs .nav-link.active {
        color: var(--primary);
        border-bottom: 2px solid var(--primary);
    }

    .form-section {
        background: #f8fafc;
        border-radius: 8px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .form-section h6 {
        color: var(--primary);
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.25rem;
    }

    .form-label .required {
        color: var(--danger);
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(8, 145, 178, 0.25);
    }

    .tab-content {
        min-height: 200px;
    }

    .form-help {
        font-size: 0.75rem;
        color: #64748b;
        margin-top: 0.25rem;
    }

    #paste_data {
        font-family: 'Courier New', monospace;
        line-height: 1.6;
        resize: vertical;
    }

    #paste_data:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(8, 145, 178, 0.25);
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header-gradient text-white py-3 mb-4">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-white bg-opacity-25 rounded-3 p-2">
                    <i class="bi bi-eye fs-4"></i>
                </div>
                <div>
                    <h1 class="h4 mb-0">Validador Óptico</h1>
                    <small class="opacity-75">Validação de dados de prescrição</small>
                </div>
            </div>
        </div>
    </header>

    <div class="container pb-5">
        <!-- Input Tabs -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Entrada de Dados</h5>

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3" id="inputTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= $inputMode === 'upload' || empty($records) ? 'active' : '' ?>"
                            id="upload-tab" data-bs-toggle="tab" data-bs-target="#upload" type="button" role="tab">
                            <i class="bi bi-cloud-upload me-2"></i>Upload de Arquivo
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= $inputMode === 'paste' ? 'active' : '' ?>" id="paste-tab"
                            data-bs-toggle="tab" data-bs-target="#paste" type="button" role="tab">
                            <i class="bi bi-clipboard-data me-2"></i>Colar Dados
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= $inputMode === 'manual' ? 'active' : '' ?>" id="manual-tab"
                            data-bs-toggle="tab" data-bs-target="#manual" type="button" role="tab">
                            <i class="bi bi-keyboard me-2"></i>Entrada Manual
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="inputTabsContent">
                    <!-- Upload Tab -->
                    <div class="tab-pane fade <?= $inputMode === 'upload' || empty($records) ? 'show active' : '' ?>"
                        id="upload" role="tabpanel">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="upload-area">
                                <i class="bi bi-cloud-upload fs-1 text-secondary mb-3 d-block"></i>
                                <input type="file" name="arquivo" id="arquivo" accept=".txt" class="form-control mb-3"
                                    style="max-width: 400px; margin: 0 auto;" required>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-2"></i>Validar Arquivo
                                </button>
                                <p class="text-muted small mt-2 mb-0">Arquivo TXT com dados separados por vírgula</p>
                            </div>
                        </form>
                    </div>

                    <!-- Paste Data Tab -->
                    <div class="tab-pane fade <?= $inputMode === 'paste' ? 'show active' : '' ?>" id="paste"
                        role="tabpanel">
                        <form method="POST" id="pasteForm">
                            <div class="mb-3">
                                <label for="paste_data" class="form-label">
                                    <i class="bi bi-clipboard me-2"></i>Cole os dados abaixo
                                </label>
                                <textarea name="paste_data" id="paste_data" class="form-control font-monospace"
                                    rows="10"
                                    placeholder="Cole aqui os dados separados por vírgula ou tab. Cada linha representa um registro.&#10;&#10;Exemplo:&#10;OS001,1,CLI001,-2.50,-0.75,180,2.00,...&#10;OS002,2,CLI002,-1.00,0.00,0,1.50,..."
                                    style="font-size: 0.875rem;"><?= isset($_POST['paste_data']) ? htmlspecialchars($_POST['paste_data']) : '' ?></textarea>
                                <div class="form-help mt-2">
                                    <i class="bi bi-info-circle me-1"></i>
                                    <strong>Dicas:</strong>
                                    <ul class="mb-0 mt-1 small">
                                        <li>Cole dados de planilhas (Excel, Google Sheets) ou arquivos CSV</li>
                                        <li>Suporta separação por vírgula (,) ou tab</li>
                                        <li>Cada linha representa um registro completo</li>
                                        <li>Você pode colar múltiplos registros de uma vez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-outline-secondary"
                                    onclick="document.getElementById('paste_data').value = ''">
                                    <i class="bi bi-x-circle me-2"></i>Limpar
                                </button>
                                <button type="submit" name="paste_submit" value="1" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-2"></i>Validar Dados
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Manual Entry Tab -->
                    <div class="tab-pane fade <?= $inputMode === 'manual' ? 'show active' : '' ?>" id="manual"
                        role="tabpanel">
                        <form method="POST" id="manualForm">
                            <input type="hidden" name="manual_submit" value="1">

                            <div class="alert alert-info mb-4">
                                <i class="bi bi-info-circle me-2"></i>
                                <strong>Dica:</strong> Preencha os campos desejados e use o botão <strong>"Gerar
                                    TXT"</strong> para exportar os dados em formato CSV, ou <strong>"Validar
                                    Dados"</strong> para validar antes de exportar.
                            </div>

                            <!-- Dados Básicos -->
                            <div class="form-section">
                                <h6><i class="bi bi-info-circle me-2"></i>Dados Básicos</h6>
                                <div class="row">
                                    <?php 
                                    $basicFields = [0, 1, 2, 25, 26, 45, 71, 72, 73, 74, 75, 76, 77, 78, 87, 88, 89, 98, 103, 104, 111];
                                    foreach ($basicFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>
                                                <span class="required">*</span>
                                                <?php endif; ?>
                                            </label>
                                            <?php if ($def['type'] === 'enum'): ?>
                                            <select name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>">
                                                <option value="">-- Selecione --</option>
                                                <?php foreach ($def['values'] as $k => $v): ?>
                                                <option value="<?= $k ?>" <?= $value == $k ? 'selected' : '' ?>>
                                                    <?= $k ?> - <?= htmlspecialchars($v) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php elseif ($def['type'] === 'date'): ?>
                                            <input type="text" name="<?= $fieldName ?>"
                                                class="form-control form-control-sm" id="<?= $fieldName ?>"
                                                value="<?= $value ?>" placeholder="DD/MM/YYYY"
                                                pattern="\d{2}/\d{2}/\d{4}">
                                            <?php else: ?>
                                            <input type="<?= $def['type'] === 'number' ? 'number' : 'text' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>"
                                                <?php if (isset($def['min'])): ?>min="<?= $def['min'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['max'])): ?>max="<?= $def['max'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>required<?php endif; ?>>
                                            <?php endif; ?>
                                            <?php if ($def['type'] === 'date'): ?>
                                            <small class="form-help">Formato: DD/MM/YYYY</small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Prescrição OD (Olho Direito) -->
                            <div class="form-section">
                                <h6><i class="bi bi-eye me-2"></i>Prescrição OD (Olho Direito)</h6>
                                <div class="row">
                                    <?php 
                                    $odFields = [3, 4, 5, 6, 11, 12, 13, 14, 19, 20, 31, 33, 35, 37, 39, 46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 94, 99, 101, 106, 108];
                                    foreach ($odFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>
                                                <span class="required">*</span>
                                                <?php endif; ?>
                                            </label>
                                            <?php if ($def['type'] === 'enum'): ?>
                                            <select name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>">
                                                <option value="">-- Selecione --</option>
                                                <?php foreach ($def['values'] as $k => $v): ?>
                                                <option value="<?= $k ?>" <?= $value == $k ? 'selected' : '' ?>>
                                                    <?= $k ?> - <?= htmlspecialchars($v) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php else: ?>
                                            <input
                                                type="<?= $def['type'] === 'number' ? 'number' : ($def['type'] === 'decimal' ? 'number' : 'text') ?>"
                                                step="<?= $def['type'] === 'decimal' ? '0.01' : '1' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>"
                                                <?php if (isset($def['min'])): ?>min="<?= $def['min'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['max'])): ?>max="<?= $def['max'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>required<?php endif; ?>>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Prescrição OE (Olho Esquerdo) -->
                            <div class="form-section">
                                <h6><i class="bi bi-eye me-2"></i>Prescrição OE (Olho Esquerdo)</h6>
                                <div class="row">
                                    <?php 
                                    $oeFields = [7, 8, 9, 10, 15, 16, 17, 18, 21, 22, 32, 34, 36, 38, 40, 47, 49, 51, 53, 55, 57, 59, 61, 63, 65, 95, 100, 102, 107, 109];
                                    foreach ($oeFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>
                                                <span class="required">*</span>
                                                <?php endif; ?>
                                            </label>
                                            <?php if ($def['type'] === 'enum'): ?>
                                            <select name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>">
                                                <option value="">-- Selecione --</option>
                                                <?php foreach ($def['values'] as $k => $v): ?>
                                                <option value="<?= $k ?>" <?= $value == $k ? 'selected' : '' ?>>
                                                    <?= $k ?> - <?= htmlspecialchars($v) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php else: ?>
                                            <input
                                                type="<?= $def['type'] === 'number' ? 'number' : ($def['type'] === 'decimal' ? 'number' : 'text') ?>"
                                                step="<?= $def['type'] === 'decimal' ? '0.01' : '1' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>"
                                                <?php if (isset($def['min'])): ?>min="<?= $def['min'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['max'])): ?>max="<?= $def['max'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>required<?php endif; ?>>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Medidas e Armação -->
                            <div class="form-section">
                                <h6><i class="bi bi-rulers me-2"></i>Medidas e Armação</h6>
                                <div class="row">
                                    <?php 
                                    $frameFields = [23, 24, 27, 28, 29, 30];
                                    foreach ($frameFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>
                                                <span class="required">*</span>
                                                <?php endif; ?>
                                            </label>
                                            <input
                                                type="<?= $def['type'] === 'number' ? 'number' : ($def['type'] === 'decimal' ? 'number' : 'text') ?>"
                                                step="<?= $def['type'] === 'decimal' ? '0.01' : '1' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>"
                                                <?php if (isset($def['min'])): ?>min="<?= $def['min'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['max'])): ?>max="<?= $def['max'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>required<?php endif; ?>>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Tratamentos e Códigos -->
                            <div class="form-section">
                                <h6><i class="bi bi-tags me-2"></i>Tratamentos e Códigos</h6>
                                <div class="row">
                                    <?php 
                                    $treatmentFields = [66, 67, 68, 69, 70, 90, 91, 92, 93];
                                    foreach ($treatmentFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                            </label>
                                            <input type="text" name="<?= $fieldName ?>"
                                                class="form-control form-control-sm" id="<?= $fieldName ?>"
                                                value="<?= $value ?>">
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Anamnese -->
                            <div class="form-section">
                                <h6><i class="bi bi-clipboard-data me-2"></i>Anamnese</h6>
                                <div class="row">
                                    <?php 
                                    $anamneseFields = [79, 80, 81, 82, 83, 84, 85, 86];
                                    foreach ($anamneseFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                            </label>
                                            <input type="<?= $def['type'] === 'number' ? 'number' : 'text' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>">
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Outros Campos -->
                            <div class="form-section">
                                <h6><i class="bi bi-list-ul me-2"></i>Outros Campos</h6>
                                <div class="row">
                                    <?php 
                                    $otherFields = [41, 42, 43, 44, 96, 97, 105, 110, 112, 113];
                                    foreach ($otherFields as $idx): 
                                        $def = $fieldDefinitions[$idx];
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>
                                                <span class="required">*</span>
                                                <?php endif; ?>
                                            </label>
                                            <?php if ($def['type'] === 'date'): ?>
                                            <input type="text" name="<?= $fieldName ?>"
                                                class="form-control form-control-sm" id="<?= $fieldName ?>"
                                                value="<?= $value ?>" placeholder="DD/MM/YYYY"
                                                pattern="\d{2}/\d{2}/\d{4}">
                                            <small class="form-help">Formato: DD/MM/YYYY</small>
                                            <?php else: ?>
                                            <input
                                                type="<?= $def['type'] === 'number' ? 'number' : ($def['type'] === 'decimal' ? 'number' : 'text') ?>"
                                                step="<?= $def['type'] === 'decimal' ? '0.01' : '1' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>"
                                                <?php if (isset($def['min'])): ?>min="<?= $def['min'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['max'])): ?>max="<?= $def['max'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>required<?php endif; ?>>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Todos os Campos Restantes (garantir que todos os 114 campos estejam disponíveis) -->
                            <div class="form-section">
                                <h6><i class="bi bi-grid me-2"></i>Todos os Campos</h6>
                                <div class="alert alert-info mb-3">
                                    <small><i class="bi bi-info-circle me-1"></i>Use esta seção para preencher qualquer
                                        campo que não esteja nas seções acima.</small>
                                </div>
                                <div class="row">
                                    <?php 
                                    // Lista de todos os campos já incluídos nas seções acima
                                    $includedFields = array_merge(
                                        [0, 1, 2, 25, 26, 45, 71, 72, 73, 74, 75, 76, 77, 78, 87, 88, 89, 98, 103, 104, 111], // básicos
                                        [3, 4, 5, 6, 11, 12, 13, 14, 19, 20, 31, 33, 35, 37, 39, 46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 94, 99, 101, 106, 108], // OD
                                        [7, 8, 9, 10, 15, 16, 17, 18, 21, 22, 32, 34, 36, 38, 40, 47, 49, 51, 53, 55, 57, 59, 61, 63, 65, 95, 100, 102, 107, 109], // OE
                                        [23, 24, 27, 28, 29, 30], // medidas
                                        [66, 67, 68, 69, 70, 90, 91, 92, 93], // tratamentos
                                        [79, 80, 81, 82, 83, 84, 85, 86], // anamnese
                                        [41, 42, 43, 44, 96, 97, 105, 110, 112, 113] // outros
                                    );
                                    
                                    // Gerar todos os campos de 0 a 113
                                    foreach ($fieldDefinitions as $idx => $def): 
                                        // Pular campos já incluídos nas seções acima
                                        if (in_array($idx, $includedFields)) continue;
                                        
                                        $fieldName = 'field_' . $idx;
                                        $value = isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
                                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">
                                                [<?= $idx ?>] <?= htmlspecialchars($def['name']) ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>
                                                <span class="required">*</span>
                                                <?php endif; ?>
                                            </label>
                                            <?php if ($def['type'] === 'enum'): ?>
                                            <select name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>">
                                                <option value="">-- Selecione --</option>
                                                <?php foreach ($def['values'] as $k => $v): ?>
                                                <option value="<?= $k ?>" <?= $value == $k ? 'selected' : '' ?>>
                                                    <?= $k ?> - <?= htmlspecialchars($v) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php elseif ($def['type'] === 'date'): ?>
                                            <input type="text" name="<?= $fieldName ?>"
                                                class="form-control form-control-sm" id="<?= $fieldName ?>"
                                                value="<?= $value ?>" placeholder="DD/MM/YYYY"
                                                pattern="\d{2}/\d{2}/\d{4}">
                                            <small class="form-help">Formato: DD/MM/YYYY</small>
                                            <?php else: ?>
                                            <input
                                                type="<?= $def['type'] === 'number' ? 'number' : ($def['type'] === 'decimal' ? 'number' : 'text') ?>"
                                                step="<?= $def['type'] === 'decimal' ? '0.01' : '1' ?>"
                                                name="<?= $fieldName ?>" class="form-control form-control-sm"
                                                id="<?= $fieldName ?>" value="<?= $value ?>"
                                                <?php if (isset($def['min'])): ?>min="<?= $def['min'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['max'])): ?>max="<?= $def['max'] ?>"
                                                <?php endif; ?>
                                                <?php if (isset($def['required']) && $def['required']): ?>required<?php endif; ?>>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-counterclockwise me-2"></i>Limpar
                                </button>
                                <button type="submit" name="generate_txt" value="1" class="btn btn-success">
                                    <i class="bi bi-file-earmark-arrow-down me-2"></i>Gerar TXT
                                </button>
                                <button type="submit" name="manual_submit" value="1" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-2"></i>Validar Dados
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Field Reference -->
        <div class="card mb-4">
            <div class="card-header bg-white d-flex justify-content-between align-items-center" style="cursor: pointer;"
                onclick="toggleReference()">
                <span><i class="bi bi-info-circle me-2 text-info"></i>Referência de Campos
                    (<?= count($fieldDefinitions) ?> campos)</span>
                <i class="bi bi-chevron-down" id="refIcon"></i>
            </div>
            <div class="collapse-content" id="referenceTable">
                <div class="card-body p-0">
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table class="table table-sm table-hover mb-0 table-reference">
                            <thead class="sticky-top bg-light">
                                <tr>
                                    <th>Índice</th>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fieldDefinitions as $idx => $def): ?>
                                <tr>
                                    <td class="text-primary fw-bold"><?= $idx ?></td>
                                    <td><?= htmlspecialchars($def['name']) ?></td>
                                    <td>
                                        <span class="badge bg-secondary"><?= $def['type'] ?></span>
                                        <?php if (isset($def['required']) && $def['required']): ?>
                                        <span class="badge bg-danger">obrigatório</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($records)): ?>
        <!-- Summary -->
        <div class="row g-3 mb-4">
            <div class="col-6 col-lg-3">
                <div class="card stat-card h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="rounded-3 p-2" style="background: rgba(8,145,178,0.1);">
                            <i class="bi bi-files fs-4" style="color: var(--primary);"></i>
                        </div>
                        <div>
                            <h3 class="mb-0"><?= count($records) ?></h3>
                            <small class="text-muted">Total Registros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card stat-card h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="rounded-3 p-2" style="background: rgba(34,197,94,0.1);">
                            <i class="bi bi-check-circle fs-4" style="color: var(--success);"></i>
                        </div>
                        <div>
                            <h3 class="mb-0"><?= $totalValid ?></h3>
                            <small class="text-muted">Válidos</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card stat-card h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="rounded-3 p-2" style="background: rgba(239,68,68,0.1);">
                            <i class="bi bi-x-circle fs-4" style="color: var(--danger);"></i>
                        </div>
                        <div>
                            <h3 class="mb-0"><?= $totalInvalid ?></h3>
                            <small class="text-muted">Com Erros</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card stat-card h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="rounded-3 p-2" style="background: rgba(245,158,11,0.1);">
                            <i class="bi bi-exclamation-triangle fs-4" style="color: var(--warning);"></i>
                        </div>
                        <div>
                            <h3 class="mb-0"><?= $totalWarnings ?></h3>
                            <small class="text-muted">Avisos</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Records -->
        <?php foreach ($records as $record): ?>
        <div class="card mb-3 <?= !$record['valid'] ? 'border-danger' : '' ?>">
            <div class="card-header bg-white record-header d-flex justify-content-between align-items-center"
                onclick="toggleRecord(<?= $record['lineNumber'] ?>)">
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary">#<?= $record['lineNumber'] ?></span>
                    <div>
                        <strong>OS: <?= htmlspecialchars($record['fields'][0]['value'] ?: '-') ?></strong>
                        <span class="text-muted mx-2">|</span>
                        <span class="text-muted">Cliente:
                            <?= htmlspecialchars($record['fields'][2]['value'] ?: '-') ?></span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <?php if ($record['valid'] && $record['warnings'] === 0): ?>
                    <span class="badge badge-valid"><i class="bi bi-check-circle me-1"></i>Válido</span>
                    <?php elseif ($record['valid']): ?>
                    <span class="badge badge-warning"><i
                            class="bi bi-exclamation-triangle me-1"></i><?= $record['warnings'] ?> aviso(s)</span>
                    <?php else: ?>
                    <span class="badge badge-invalid"><i class="bi bi-x-circle me-1"></i><?= $record['errors'] ?>
                        erro(s)</span>
                    <?php endif; ?>
                    <i class="bi bi-chevron-down" id="icon-<?= $record['lineNumber'] ?>"></i>
                </div>
            </div>
            <div class="collapse-content" id="record-<?= $record['lineNumber'] ?>">
                <?php 
                $fieldsWithErrors = array_filter($record['fields'], fn($f) => !$f['validation']['valid']);
                $fieldsWithWarnings = array_filter($record['fields'], fn($f) => count($f['validation']['warnings']) > 0);
                ?>

                <?php if (!empty($fieldsWithErrors)): ?>
                <div class="alert alert-danger m-3 mb-0">
                    <strong><i class="bi bi-x-circle me-2"></i>Erros encontrados:</strong>
                    <ul class="mb-0 mt-2">
                        <?php foreach ($fieldsWithErrors as $field): ?>
                        <li><strong><?= htmlspecialchars($field['name']) ?>:</strong>
                            <?= implode(', ', $field['validation']['errors']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if (!empty($fieldsWithWarnings)): ?>
                <div class="alert alert-warning m-3 mb-0">
                    <strong><i class="bi bi-exclamation-triangle me-2"></i>Avisos:</strong>
                    <ul class="mb-0 mt-2">
                        <?php foreach ($fieldsWithWarnings as $field): ?>
                        <li><strong><?= htmlspecialchars($field['name']) ?>:</strong>
                            <?= implode(', ', $field['validation']['warnings']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <div class="card-body">
                    <h6 class="mb-3">Campos</h6>
                    <div class="row g-2">
                        <?php foreach (array_slice($record['fields'], 0, 44) as $field): 
                            $hasValue = trim($field['value']) !== '';
                            $hasError = !$field['validation']['valid'];
                            $hasWarning = count($field['validation']['warnings']) > 0;
                            $cardClass = $hasError ? 'has-error' : ($hasWarning ? 'has-warning' : ($hasValue ? 'has-value' : 'empty'));
                        ?>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                            <div class="card field-card <?= $cardClass ?> h-100">
                                <div class="card-body p-2">
                                    <small class="text-muted d-block text-truncate">[<?= $field['index'] ?>]
                                        <?= htmlspecialchars($field['name']) ?></small>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font-monospace text-truncate" style="max-width: 90%;">
                                            <?php if ($hasValue): ?>
                                            <?= htmlspecialchars($field['value']) ?>
                                            <?php if ($field['fieldDef']['type'] === 'enum' && isset($field['fieldDef']['values'][$field['value']])): ?>
                                            <small
                                                class="text-muted">(<?= $field['fieldDef']['values'][$field['value']] ?>)</small>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <span class="text-muted">—</span>
                                            <?php endif; ?>
                                        </span>
                                        <?php if ($hasError): ?>
                                        <i class="bi bi-x-circle text-danger"></i>
                                        <?php elseif ($hasWarning): ?>
                                        <i class="bi bi-exclamation-triangle text-warning"></i>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php elseif ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($records)): ?>
        <!-- Empty State -->
        <div class="text-center py-5">
            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                style="width: 80px; height: 80px;">
                <i class="bi bi-file-earmark-text fs-1 text-secondary"></i>
            </div>
            <h4>Nenhum dado carregado</h4>
            <p class="text-muted">Use uma das opções disponíveis:
                <strong>"Upload de Arquivo"</strong> para carregar um arquivo TXT,
                <strong>"Colar Dados"</strong> para colar dados de planilhas, ou
                <strong>"Entrada Manual"</strong> para digitar os dados diretamente no formulário.
            </p>
        </div>
        <?php endif; ?>
    </div>

    <footer class="border-top py-4 mt-5">
        <div class="container text-center text-muted">
            <small>Validador Óptico — Sistema de validação de dados de prescrição</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function toggleRecord(id) {
        const content = document.getElementById('record-' + id);
        const icon = document.getElementById('icon-' + id);
        content.classList.toggle('show');
        icon.classList.toggle('bi-chevron-down');
        icon.classList.toggle('bi-chevron-up');
    }

    function toggleReference() {
        const content = document.getElementById('referenceTable');
        const icon = document.getElementById('refIcon');
        content.classList.toggle('show');
        icon.classList.toggle('bi-chevron-down');
        icon.classList.toggle('bi-chevron-up');
    }

    // Manter aba ativa após validação
    <?php if (($inputMode === 'manual' || $inputMode === 'paste') && !empty($records)): ?>
    document.addEventListener('DOMContentLoaded', function() {
        const activeTab = document.getElementById('<?= $inputMode ?>-tab');
        if (activeTab) {
            const tab = new bootstrap.Tab(activeTab);
            tab.show();
        }
    });
    <?php endif; ?>
    </script>
</body>

</html>