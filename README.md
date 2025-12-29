# Validador Óptico

Sistema web desenvolvido em PHP para validação de dados de prescrições ópticas. O sistema permite o upload de arquivos TXT com dados separados por vírgula e realiza validação completa de 114 campos relacionados a prescrições de óculos.

## 📋 Descrição

O **Validador Óptico** é uma aplicação web que processa e valida arquivos de texto contendo dados de prescrições ópticas. O sistema verifica:

- **Campos obrigatórios**: Garante que campos essenciais estejam preenchidos
- **Tipos de dados**: Valida números inteiros, decimais, enums, datas e textos
- **Intervalos**: Verifica valores mínimos e máximos para campos numéricos
- **Formato de datas**: Valida formato DD/MM/YYYY
- **Valores enum**: Verifica se os valores estão dentro das opções permitidas

## 🎯 Funcionalidades

- ✅ Upload de arquivos TXT com dados separados por vírgula
- ✅ Validação de 114 campos de prescrição óptica
- ✅ Interface visual moderna e responsiva
- ✅ Exibição detalhada de erros e avisos por registro
- ✅ Estatísticas de validação (total, válidos, com erros, avisos)
- ✅ Referência completa de todos os campos disponíveis
- ✅ Visualização expandível de cada registro validado

## 📦 Requisitos

- PHP 7.4 ou superior
- Servidor web (ou servidor embutido do PHP)
- Navegador web moderno

## 🚀 Como Executar

### Opção 1: Servidor PHP Embutido (Recomendado para desenvolvimento)

1. Abra o terminal na pasta do projeto:

```bash
cd /Users/lhonay/Documents/htdocs/gerador-rf
```

2. Inicie o servidor PHP na porta 8001:

```bash
php -S localhost:8001
```

3. Acesse no navegador:

```
http://localhost:8001
```

### Opção 2: Servidor Web (Apache/Nginx)

Se você estiver usando um servidor web como Apache ou Nginx, configure o diretório do projeto como raiz do site e acesse através do domínio configurado.

## 📁 Estrutura do Projeto

```
gerador-rf/
├── index.php          # Arquivo principal da aplicação
└── README.md          # Este arquivo
```

## 📊 Campos Validados

O sistema valida 114 campos diferentes, incluindo:

- **Dados básicos**: OS (Laboratório), Quantidade, Código Cliente
- **Prescrição OD (Olho Direito)**: Esf, Cil, Eixo, Adição, Prisma, etc.
- **Prescrição OE (Olho Esquerdo)**: Esf, Cil, Eixo, Adição, Prisma, etc.
- **Medidas da armação**: DNP, Shape ID, Diâmetro, DBL, P+A, DV, DM, etc.
- **Dados do produto**: Código Produto, Código de Barras, Crib, Material, etc.
- **Informações do cliente**: Nome, Anamnese, Ocupação, Hobby, etc.
- **Dados adicionais**: Tratamentos, Engraving, Data Entrega, etc.

### Tipos de Validação

- **text**: Campo de texto livre
- **number**: Número inteiro (com validação de min/max quando aplicável)
- **decimal**: Número decimal (aceita vírgula ou ponto)
- **enum**: Valor pré-definido de uma lista
- **date**: Data no formato DD/MM/YYYY
- **required**: Campo obrigatório (marcado com `required => true`)

## 📝 Formato do Arquivo de Entrada

O arquivo deve ser um arquivo **TXT** com dados separados por vírgula (CSV), onde:

- Cada linha representa um registro (prescrição)
- Cada coluna corresponde a um campo específico (índice 0-113)
- Os valores devem seguir os tipos e formatos definidos para cada campo

### Exemplo de formato:

```
OS001,1,CLI001,-2.50,-0.75,180,2.00,-2.25,-0.50,90,2.00,...
OS002,2,CLI002,-1.00,0.00,0,1.50,0.00,0.00,0,0.00,...
```

## 🎨 Interface

A interface foi desenvolvida com:

- **Bootstrap 5.3.2**: Framework CSS para layout responsivo
- **Bootstrap Icons**: Ícones modernos e consistentes
- **Design moderno**: Gradientes, cards com sombras e animações suaves
- **Responsivo**: Funciona em desktop, tablet e mobile

### Recursos da Interface

- **Área de upload**: Drag & drop visual para carregar arquivos
- **Tabela de referência**: Lista completa de todos os 114 campos com seus tipos
- **Cards de estatísticas**: Resumo visual dos resultados da validação
- **Registros expandíveis**: Clique para ver detalhes de cada registro
- **Códigos de cores**:
  - 🟢 Verde: Registro válido
  - 🔴 Vermelho: Registro com erros
  - 🟡 Amarelo: Registro com avisos

## 🔍 Validações Implementadas

### Validação de Campos Obrigatórios

Campos marcados como `required => true` devem estar preenchidos, caso contrário geram erro.

### Validação de Números Inteiros

- Verifica se o valor é um número inteiro válido
- Valida limites mínimos e máximos quando especificados
- Exemplo: Campo "Eixo OD" aceita valores de 0 a 180

### Validação de Decimais

- Aceita números decimais com vírgula ou ponto
- Exemplo: -2.50, 1.75, 0.00

### Validação de Enum

- Verifica se o valor está na lista de valores permitidos
- Exemplo: Campo "Quantidade" aceita: 1 (Ambos), 2 (Direito), 3 (Esquerdo)

### Validação de Data

- Formato esperado: DD/MM/YYYY
- Gera aviso (não erro) se o formato não corresponder

## 🛠️ Tecnologias Utilizadas

- **PHP**: Linguagem de programação server-side
- **HTML5**: Estrutura da página
- **CSS3**: Estilização customizada
- **Bootstrap 5.3.2**: Framework CSS
- **Bootstrap Icons 1.11.1**: Biblioteca de ícones
- **JavaScript**: Interatividade (toggle de seções)

## 📌 Notas Importantes

1. **Arquivo de entrada**: O sistema aceita apenas arquivos `.txt` com dados separados por vírgula
2. **Encoding**: O arquivo deve estar em UTF-8 para caracteres especiais
3. **Limite de upload**: O limite padrão do PHP para upload de arquivos é 2MB (configurável no `php.ini`)
4. **Campos vazios**: Campos não obrigatórios podem ficar vazios sem gerar erro
5. **Valores enum**: Devem corresponder exatamente às chaves numéricas definidas (ex: 1, 2, 3)

## 🔧 Personalização

Para adicionar ou modificar campos, edite o array `$fieldDefinitions` no arquivo `index.php`:

```php
$fieldDefinitions = [
    0 => ['name' => 'Nome do Campo', 'type' => 'text', 'required' => true],
    // ... mais campos
];
```

## 📄 Licença

Este projeto é de uso interno.

## 👤 Autor

- Helionay Cronemberger Araújo
- eu@lhonay.com
- Desenvolvido para validação de dados de prescrições ópticas.

---

**Última atualização**: 2024
