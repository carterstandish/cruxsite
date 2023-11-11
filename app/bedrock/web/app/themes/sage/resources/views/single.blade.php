@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="single-post-header mt-28 mx-10 flex flex-col text-left">
      <div class="category">
        <?php get_the_category() ?>
      </div>
      <div class="text-6xl font-bold">
        {{the_title()}}
      </div>
      <div class="pl-1 mt-2 text-cyan-800">
        <p> By: {{get_the_author()}} on {{the_date()}}</p>
      </div>
    </div>
    <div class="single-post-content mt-10 mx-10">
      {{the_content()}}
    </div>


  @endwhile
@endsection
