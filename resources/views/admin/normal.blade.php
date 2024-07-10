<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Normal-Ticket</title>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link href="{{ url('js-ticket/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('admin.navber')
    <div id="layoutSidenav_content">
    <main style="font-style: normal;margin-right: 15rem;margin-left: 1rem;margin-top: 4rem;">
        <div class="card mb-12">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            جدول المشكلات
            </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="ts">رقم </th>
                        <th class="ts"> أسم المستخدم</th>
                        <th class="ts">عنوان </th>
                        <th class="ts">ونوع </th>
                        <th class="ts">أولوية </th>
                        <th class="ts">حالة </th>
                        <th class="ts">وقت وتاريخ </th>
                        <th class="ts" colspan="3">عرض التفاصيل</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($ticket as $show)
                    @if ($show->severity == 'عادية')
                        <tr id="popu">
                            <td>{{ $i++ }}</td>
                            <td>{{ $show->user->name }}</td>
                            <td>{{ $show->title }}</td>
                            <td>{{ $show->new_or_repeated }}</td>
                            <td>{{ $show->severity }}</td>
                            <td>{{ $show->status }}</td>
                            <td>{{ $show->created_at }}</td>
                            <td style="display: flex; gap: 10px;"><button class="show-ticket show-modal" type="button" data-id="{{ $show->id }}"
                                style="border-radius: 6px;border: 1px solid #08061c17;width: 100%;font-size: 15px"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fi fi-br-edit"></i> تعديل</button>
                            <button class="show-ticket" type="button" value=""
                            style="border-radius: 6px;border: 1px solid #08061c17;width: 100%; font-size: 15px"
                            onclick="deleteTicket({{ $show->id }})">
                            <i class="fi fi-bs-trash"></i> حذف</button></td>
                        </tr>

                            @endif
                    @endforeach

                </tbody>
            </table>
        </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted"><img src="{{ url('assets-ticket/img/Frame.svg') }}" alt=""
                        style="max-width: 30%;"></div>
            </div>
        </div>
    </footer>
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
    <script src="{{ url('js-ticket/simple-datatables.min.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ url('js-ticket/datatables-simple-demo.js') }}"></script>
    {{-- <script>
        $('.show-modal').on('click', function(e) {
            const ticketId = $(this).data('id');
            $.ajax({
            type: 'POST',
            url: '{{ route("show.ticket") }}',
            data: {
                id: ticketId,
                sever: 1,
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
        });</script>
        <script>
        
        function deleteTicket(id) {
            if (confirm('سوف يتم حذف  المشكلة نهائيا" ؟')) {
                $.ajax({
                    url: '/tickets/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Reload the page to reflect the updated list of tickets
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle the error case, e.g., show an error message
                        console.error(error);
                    }
                });
            }
        }
            </script> --}}
</body>

</html>