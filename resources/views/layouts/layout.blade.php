<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<head>

    @include('includes.structure.meta')

    @include('includes.css.css')


</head>
<body class="doc-body">

  @include('includes.structure.accessibility')

  @include('includes.structure.nav')

  @include('includes.structure.head')

  <div class="container mt-3">
    @yield('content')
  </div>



  @include('includes.structure.share')

  @include('includes.structure.footer')


  @include('includes.scripts.javascript')

</body>
</html>
