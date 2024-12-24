<script src="{{ asset('js/designs/card-slider.js') }}?v={{ time() }}"></script>

<script src="{{ asset('js/designs/seeMore.js') }}?v={{ time() }}"></script>

<script>
    var oldProductSlug = "{{ old('product', request()->product) }}";
    var oldCategorySlugs = @json(old('category', request()->category ?? []));
    var routeGetCategoriesByProduct = '{{ route('designFilter.getCategoriesByProduct', ':slug') }}';
</script>
<script src="{{ asset('js/designs/filter.js') }}?v={{ time() }}"></script>

<script src="{{ asset('js/designs/comment.js') }}?v={{ time() }}"></script>
<script src="{{ asset('js/designs/reply.js') }}?v={{ time() }}"></script>