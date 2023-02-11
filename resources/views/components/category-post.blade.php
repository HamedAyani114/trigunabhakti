<h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li>
                    <a href="{{ route('blog.index') }}">All</a>
                  </li>
                  @foreach ($categories as $category)
                  <li>

                    <a href="/cat/{{ $category->id }}"> {{ $category->category_name }} <span>({{ $category->post->where('post_type','=','Blog')->where('is_publish', '=', '1')->count() }})</span></a>
                </li>
                @endforeach
                </ul>
              </div>
