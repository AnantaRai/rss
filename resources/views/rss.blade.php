<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<rss version="2.0">
    <channel>
        <title>The Guardian - {{ ucfirst($section) }}</title>
        <link>https://www.theguardian.com/{{ $section }}</link>
        <description>Latest articles from The Guardian's {{ ucfirst($section) }} section</description>
        <language>en-gb</language>
        <lastBuildDate>{{ date('r') }}</lastBuildDate>

        @foreach ($articles as $article)
            <item>
                <title>{{ htmlspecialchars($article['webTitle']) }}</title>
                <link>{{ htmlspecialchars($article['webUrl']) }}</link>
                <pubDate>{{ date('r', strtotime($article['webPublicationDate'])) }}</pubDate>
                <guid>{{ htmlspecialchars($article['id']) }}</guid>
            </item>
        @endforeach
    </channel>
</rss>
