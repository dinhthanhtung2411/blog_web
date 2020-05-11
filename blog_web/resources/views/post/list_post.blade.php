@section('list')
<div class="container">
    @forelse($posts as  $post)
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->subtitle }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">{{ $post->id }}</a>
                            {{ $post->created_at }}</p>
                    </div>
                    <hr>

                </div>
            </div>
</div>
    @empty <td>No post to display!</td>
    @endforelse
    <div class="clearfix">
        <span class="btn btn-primary float-right">{{$posts->links()}}</span>
    </div>
@endsection
