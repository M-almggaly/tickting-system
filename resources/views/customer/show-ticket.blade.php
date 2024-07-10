<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Show-Ticket</title>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>

<body class="sb-nav-fixed">
    @include('customer.navber')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">عرض المشاكل</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">عرض المشاكل</li>
                    <li class="breadcrumb-item">/ <a href="{{ route('customer.create')}}">أضافة مشكلة </a>
                    </li>
                </ol>
            </div>
                <form action="" class="grob-ticket show-ticket"
                    style="border: radius 0;;border:0 solid #babbbc; width: 80%;max-width: 80%;margin-left: 6rem;margin-bottom: 2rem;">
                    <div class="form-floating">
                        <table>
                            <tr id="headeruser">
                                <th>رقم المشكلة</th>
                                <th>عنوان المشكلة</th>
                                <th>نوع المشكلة</th>
                                <th>حالة المشكلة</th>
                                <th>وقت وتاريخ المشكلة</th>
                                <th colspan="3">عرض التفاصيل</th>

                            </tr>
                            <?php $i=1?>
                            @foreach ($ticket as $item)
                                <tr id="popu">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->new_or_repeated }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td style="display: flex"><button class="show-ticket show-modal" type="button" data-id="{{$item->id}}"
                                        style="border-radius: 6px;border: 1px solid #08061c17;width: 70%;margin-left: 10px;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fi fi-br-edit"></i> تعديل
                                    </button>
                                
                                    <button class="show-ticket" type="button" value=""
                                    style="border-radius: 6px;border: 1px solid #08061c17;width: 70%;margin-left: 10px;"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="fi fi-bs-trash"></i> حذف</button>
                                   
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </form>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"><img src="{{ url('assets-ticket/img/Frame.svg') }}" alt=""
                                style="max-width: 30%;"></div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

   <!-- Modal -->
   <div style="direction: rtl;text-align: right" class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
   aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="staticBackdropLabel">عرض المشكلة</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin: 0"></button>
           </div>
           <div class="modal-body">
           </div>
       </div>
   </div>
</div>
    <script src="{{ url('tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('js-ticket/tinymce.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('js-ticket/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('assets-ticket/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets-ticket/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ url('js-ticket/datatables-simple-demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$('.show-modal').on('click', function(e) {
    const ticketId = $(this).data('id');
    $.ajax({
    type: 'POST',
    url: '{{ route("show.ticket") }}',
    data: {
        id: ticketId,
        sever: 0,
        _token: '{{ csrf_token() }}'
    },
    success: function(data) {
        $('.modal-body').html(data);
    },
    error: function(xhr, status, error) {
        console.error('AJAX error:', error);
        console.error('Status:', status);
        console.error('Response:', xhr.responseText);
    }
});
});
    </script>
</body>

</html>
