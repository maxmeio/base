**Base Webpack**

 1. Install global [node.js](https://nodejs.org/en/download/)
 2. Install npm, npm install
 3. Run npm, npm run watch
 4. Run server php in base host, php -S localhost:8000

**3.Front-end**

- Webpack
- Node.js

## Instruções Front-end

1. Os arquivos sass nesta base possuem uma estrutura pré organizada a seguir:
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
4. Para importar uma nova biblioteca js você vai encontrar o arquivo src/js/app.js e incluir as bibliotecas da seguinte maneira:
	- Dentro do app.js você dará um import 'bootstrap'; por exemplo.
5. A estrutura do arquivos também devem seguir uma estrutura semelhante:
- Os arquivos PHP no Laravel Blade são escritos da seguinte forma:
	- _header.php
- A estrutura é semelhante aos dos assets:
	- blocks
		- _head.php
		- _header.php
		- _footer.php
		- _scripts.php
	- partials (Arquivos comuns em todo projeto)
		- _menu.php
		- _selo.php
	- sections
		- _section_slide.php
*Obs: Estes arquivos se encontram dentro do diretório public/pages/layouts. Diferente do sass, é necessário colocar o underline.

## Autoria e contribuições

- Heberty Carlos Silva de Oliveira [heberty](https://github.com/Heberty)