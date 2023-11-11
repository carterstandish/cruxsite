<div class="flex flex-col">
    <div class="flex justify-center">
        <h2 class="text-3xl font-bold"><a href="{{ url('/page') }}">LATEST ARTICLES</a></h2>
    </div>

    <div class="flex gap-[25px] grow mx-[25px] ">
    @while(have_posts()) @php(the_post())
            <div class="flex flex-col shadow-xl rounded-md p-5">
                <div class="thumbnail">
                    <a  href="{{ get_the_permalink() }}">
                        <img class="rounded-md float-left w-100 h-[250px] object-cover" {!! get_the_post_thumbnail() !!}
                    </a>
                </div>
                <div class="recent-posts-title-box">
                    <h1 class="font-bold my-2"><a href="{{ the_permalink() }}"> {!! the_title() !!} </a></h1>
                </div>
                <div class="recent-posts-content-box"
                    <p class="text-gray-700">
                        @if (has_excerpt())
                            {{ get_the_excerpt() }}
                        @else
                            {!! wp_trim_words(get_the_content(), 30) !!}
                        @endif
                    </p>
                </div>
            </div>
    @endwhile
    </div>
</div>
