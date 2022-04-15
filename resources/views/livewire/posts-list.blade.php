<section class="section_posts">
    <div class="posts">
        <div class="posts_cards">
            @foreach($posts as $post)
                <a href="{{ route('post', $post) }}" class="post_card">
                    <div class="header_post_card">
                        <div class="icon_header_post_card">
                            terrenossanmarcos
                        </div>
                        <div class="date_post_card">
                            {{ $post->date }}
                        </div>
                    </div>
                    <div class="image_post_card" style="background-image: url('{{ $post->get_image }}')">
                    </div>
                    <div class="title_post_card">
                        {{ $post->title }}
                    </div>
                    <div class="content_post_card">
                        {!! substr( $post->content, 0, 200 ) !!}...
                    </div>
                    <div class="post_read_more">
                        seguir leyendo...
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
