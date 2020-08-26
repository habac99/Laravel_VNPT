<table class="table table-bordered table-hover" id="serviceTable">
    <thead>
    <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col" class="text-center">Name</th>
        <th scope="col" class="text-center">Logo image</th>
        <th scope="col" class="text-center">Short Description</th>
        <th scope="col" class="text-center">Options</th>
        <th class="hidden" style="display: none">id</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<nav>
    <ul class="pagination justify-content-center" id="navbar">

        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
            <span class="page-link" aria-hidden="true">‹</span>
        </li>
        <li class="page-item active"  aria-current="page"><button type="button"  id="1"  class="page-link btn btn-primary">xxx</button></li>




    </ul>
</nav>
<script>
    $(document).ready(function (){
        $(".page-item.btn.btn-primary").click(function (){
            refetch(this)
        })

    })
</script>
