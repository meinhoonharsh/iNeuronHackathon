<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset='UTF-8'>
<meta name='keywords' content='{{ $keywords ?? '' }},blog,technical,programming,blogs'>
<meta name='description'
    content='{{ $description ?? 'Genesis Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.' }}'>
<meta name='subject' content='Genesis Blogs'>
<meta name='copyright' content='Genesisn'>
<meta name='language' content='ES'>
<meta name='summary'
    content='Genesis Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'>
<meta name='Classification' content='Education/Programming'>
<meta name='author' content='Genesis, contact@Genesis.co'>
<meta name='designer' content='Genesis'>
<meta name='reply-to' content='contact@Genesis.co'>
<meta name='owner' content='Genesis'>
<meta name='category' content='Education'>
<meta name='subtitle' content='A Platform to create and find all your Technical solutions.'>
<meta name="monetization" content="$ilp.uphold.com/H82qqmD6EFq2">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="/public/img/favicon.ico.png" type="image/x-icon">


<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $title ?? 'Genesis Blogs | Never Stop Learning' }}">
<meta itemprop="description"
    content="{{ $description ?? 'Genesis Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.' }}">
<meta itemprop="image" content="{{ $imagepath ?? '' }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@genesis">
<meta name="twitter:title" content="{{ $title ?? 'Genesis Blogs | Never Stop Learning' }}">
<meta name="twitter:description"
    content="{{ $description ?? 'Genesis Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.' }}">
<meta name="twitter:creator" content="@genesis">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{{ $imagepath ?? '' }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title ?? 'Genesis Blogs | Never Stop Learning' }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://genesis" />
<meta property="og:image" content="{{ $imagepath ?? '' }}" />
<meta property="og:description"
    content="{{ $description ?? 'Genesis Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.' }}" />
<meta property="og:site_name" content="Genesis Blogs | Never stop Learning" />
<meta property="article:published_time" content="{{ $published_time ?? '' }}" />
<meta property="article:modified_time" content="{{ $updated_time ?? '' }}" />
<meta property="article:section" content="Technology" />
<meta property="article:tag" content="Education" />
{{-- <meta property="fb:admins" content="Facebook numberic ID" /> --}}
