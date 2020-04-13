git # DESCRIÇÃO DO PROJETO

O projeto consiste no desenvolvimento de um painel para a administração de sites e sistemas usando o Laravel integrado com o AdminLTE.

## Tecnologias utilizadas

**1.Server-side**

- PHP >= 7.1
- MySQL
- Laravel Framework

**2.Client-side**

- Template AdminLTE
- Javascript

**3.Front-end**

- Webpack
- Node.js

## Instruções Back-end

1. Clonar o projeto para sua máquina com **git clone https://github.com/lopesjpaulo/admin.git**
2. Executar o comando **copy .env.example .env** para criar o arquivo **.env** na pasta.
3. Modificar o arquivo **.env** com os dados de conexão do seu banco de dados local.
4. Rodar **composer install** para instalar as dependências do server-side.
5. Executar o comando **php artisan key:generate** para gerar a chave do app.
6. Rodar **php artisan migrate** para executar as migrations e criar as tabelas do banco de dados.
7. Ao criar uma nova funcionalidade, criar um novo branch com o comando **git checkout -b 'nome da funcionalidade'**. 
8. Após todos os testes da nova funcionalidade, fazer o **pull** do repositório para verificar se houve alguma mudança antes do merge.
9. Após o pull e resolução de possíveis conflitos, fazer o merge para a branch **develop**.
10. O código será então revisado e será feito o merge para a branch **master**, que é a branch de produção
e que estará sendo usada no servidor no momento.
11. Caso haja necessidade, executar o comando **php artisan storage:link** para criar um link
simbólico de acesso aos arquivos e imagens.

## Instruções Front-end

1. Instale as dependencias com npm install, isso criará uma pasta chamada node_modules que não deverá ir ao servidor.
2. Os comandos a seguir vão compilar os aquivos js, scss e images encontrando respectivamentes em resourses/js, resourses/scss e resourses/images:
 - npm run dev (Compila apenas uma vez os assets)
 - npm run watch (Complia toda vez que você salvar um arquivo novo).
 *Obs: Os arquivos finais ficaram em public/css/app.css, public/js/app.js e public/images/min.
3. Os arquivos sass nesta base possuem uma estrutura pré organizada a seguir:
 - communs
 	- _fonts.scss (Aqui vai tudo referente a fonts)
	- _communs.scss (Aqui vai tudo que se repete com frequência durante o projeto)
	- _base.scss (Aqui vai apenas tags padrões como: p, section, button. Nada de classes aqui)
	- _variables.scss (Aqui vão as variáveis como cores e pesos de fontes)
 - blocks
 	- _header.scss 
	- _footer.scss
 - partials
 	- _menu_site.scss
	- _selo.scss
 - sections
 	- _section_slide.scss
 - app.scss (Onde todas os aquivos são importados)
 *Obs. para importar os arquivos não é necessário o underline, nem a exetenção do arquivo. Ex.: @inport "block/header";
4. Para importar uma nova biblioteca js você vai encontrar o arquivo resourses/js/bootstrap.js e incluir as bibliotecas da seguinte mandeira:
	- Dentro do try você dará um require('bootstrap'); por exemplo.
5. A estrutura do arquivos também devem seguir uma estrutura semelhante:
- Os arquivos PHP no Laravel Blade são escritos da seguinte forma:
	- _header.blade.php (Sem essa nomenclatura os arquivos não serão reconhecidos.)
- A estrutura é semelhante aos dos assets:
	- blocks
		- _head.blade.php
		- _header.blade.php
		- _footer.blade.php
		- _scripts.blade.php
	- partials (Arquivos comuns em todo projeto)
		- _menu.blade.php
		- _selo.blade.php
	- sections
		- _section_slide.blade.php
*Obs: Estes arquivos se encontram dentro do diretório resourses/pages/layouts e são importados da seguinte maneira: @include('pages.layouts.sections._section_slide). Diferente do sass, é necessário colocar o underline, mas não necessário incluir a extenção blade.php.

## Autoria e contribuições

- João Paulo Lopes: Back-end e DBA [lopesjpaulo](https://github.com/lopesjpaulo)
- Heberty Carlos Silva de Oliveira: Front-end e Help Desk [heberty](https://github.com/Heberty)
