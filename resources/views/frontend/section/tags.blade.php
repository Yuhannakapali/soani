

<meta property="og:url"           content="{!!'yuhannakapali.com.np/blog/'.$data->title!!}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$data->title}}" />
<meta property="og:description"   content=" {!! ucfirst(substr($data->body,0,450)) !!}" />
<meta property="og:image"         content="{{asset('images/upload/'.$data->image_name)}}" />