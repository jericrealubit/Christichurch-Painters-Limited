<div class="col-sm-3 offset-sm-1 blog-sidebar">

  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>
      Christchurch Painters Limited provides professional painting services throughout Christchurch and surrounding areas. We aim to establish ourselves as a top painting and decorating company in Canterbury by providing high quality workmanship and longer lasting paint jobs to meet superior customer satisfaction.
    </p>
  </div>

  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
  
      @if (!empty($archives))

        @foreach ($archives as $stats) 
          
          <li>

            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">

              {{ $stats['month'].' '.$stats['year'] }}

            </a>

          </li>
          
        @endforeach

      @endif

    </ol>
  </div>

  <div class="sidebar-module">
    <h4>Tags</h4>
    <ol class="list-unstyled">
  
      @if (!empty($archives))

        @foreach ($tags as $tag) 
          
          <li>

            <a href="/posts/tags/{{ $tag }}">

              {{ $tag }}

            </a>

          </li>
          
        @endforeach

      @endif

    </ol>
  </div>

  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
  
</div><!-- /.blog-sidebar -->