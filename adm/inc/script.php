<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script>
    function alert(type,msg){
        let bs_class=(type=='success') ? 'alert-success': 'alert-danger';
        let element=document.createElement('div');
        element.innerHTML= '
            <div class="alert ${$bs_class} alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">${msg}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        ';
            document.body.append(element);
    }
</script>