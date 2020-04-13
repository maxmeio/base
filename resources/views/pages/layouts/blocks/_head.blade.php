<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --}}
	
	{{-- Short description of the page (limit to 150 characters) --}}
	{{-- In *some* situations this description is used as a part of the snippet shown in the search results. --}}
	<meta name="description" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">
	
	{{-- Control the behavior of search engine crawling and indexing --}}
	<meta name="robots" content="index,follow,noodp">{{-- All Search Engines --}}
	<meta name="googlebot" content="index,follow">{{-- Google Specific --}}
	
	{{-- Short description of your site's subject --}}
	<meta name="subject" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">
	
	{{-- Very short sentence describing the purpose of the website --}}
	<meta name="abstract" content="@yield('APP_PURPOSE', env('APP_PURPOSE', 'A description of the page'))">
	
	{{-- Describes the topic of the website --}}
	<meta name="topic" content="@yield('APP_TOPIC', env('APP_TOPIC', 'A description of the page'))">
	
	{{-- Brief summary of the company or purpose of the website --}}
	<meta name="summary" content="@yield('APP_SUMMARY', env('APP_SUMMARY', 'A description of the page'))">

	{{-- <meta property="fb:app_id" content="123456789"> --}}
	<meta property="og:url" content="@yield('PAGE_URL', request()->fullUrl())">
	<meta property="og:type" content="{{ env('OG_TYPE', 'website') }}">
	<meta property="og:title" content="@yield('PAGE_TITLE', env('APP_NAME', 'SITE'))">
	<meta property="og:image" content="@yield('PAGE_IMAGE')">
	<meta property="og:description" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">
	<meta property="og:site_name" content="{{ env('APP_NAME', 'SITE') }}">
	<meta property="og:locale" content="pt_BR">
	{{-- <meta property="article:author" content=""> --}}
	{{-- Facebook: https://developers.facebook.com/docs/sharing/webmasters#markup --}}
	{{-- Open Graph: http://ogp.me/ --}}

	{{-- <link href="https://plus.google.com/+YourPage" rel="publisher"> --}}
	<meta itemprop="name" content="@yield('PAGE_TITLE', env('APP_NAME', 'SITE'))">
	<meta itemprop="description" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">
	<meta itemprop="image" content="@yield('PAGE_IMAGE')">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@yield('TWITTER_ACCOUNT', env('TWITTER_ACCOUNT'))">
	{{-- <meta name="twitter:creator" content="@individual_account"> --}}
	<meta name="twitter:url" content="@yield('PAGE_URL', request()->fullUrl())">
	<meta name="twitter:title" content="@yield('PAGE_TITLE', env('APP_NAME', 'SITE'))">
	<meta name="twitter:description" content="@yield('APP_DESCRIPTION', env('APP_DESCRIPTION', 'A description of the page'))">
	<meta name="twitter:image" content="@yield('PAGE_IMAGE')">
	{{-- More info: https://dev.twitter.com/cards/getting-started --}}
	{{-- Validate: https://dev.twitter.com/docs/cards/validation/validator --}}
	
	{{-- Document Title --}}
	<title>@yield('PAGE_TITLE', env('APP_NAME', 'SITE'))</title>
	
	{{-- Base URL to use for all relative URLs contained within the document --}}
	<base href="{{ env('APP_URL') }}/">

	{{-- Helps prevent duplicate content issues --}}
	<link rel="canonical" href="@yield('CANONICAL_URL', request()->fullUrl())">
	
	{{-- Links to the author of the document --}}
	<link rel="author" href="maxmeio">
	
	{{-- Gives information about an author or another person --}}
	<link rel="me" href="http://www.maxmeio.com/" type="text/html">
	<link rel="me" href="mailto:web@maxmeio.com">
	<link rel="me" href="sms:+558432072700">

	<link rel="stylesheet" href="/css/dist/app.css">

	{{-- SE NECESSÁRIO UTILIZAR UM CSS ESPECÍFICO PARA ALGUMA PÁGINA --}}
	@yield('css')
	
	{{-- GERE OS ARQUIVOS E DESCOMENTE AS LINHAS --}}
	{{-- <link rel="apple-touch-icon" sizes="57x57" href="/images/min/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/min/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/min/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/min/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/min/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/min/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/min/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/min/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/min/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/images/min/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/min/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/min/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/min/favicon/favicon-16x16.png">
	<link rel="manifest" href="/images/min/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="/images/min/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#FFFFFF"> --}}
</head>