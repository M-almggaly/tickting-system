<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Edit</title>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">
    <link href="{{ url('js-ticket/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    @include('admin.navber')
    <div id="layoutSidenav_content" style="font-family: 'Alexandria', sans-serif;font-size: 13px">
        <main style="font-style: normal;">
            <div class="container-fluid px-4" style="margin-top: 7rem">
                <form method="POST" action="{{ route('admin-index.update', $ticket->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row" style="margin-top: 2rem;border: 1px solid rgba(0, 0, 0, 0.24);border-radius: 25px;padding-bottom: 1rem;border-top-right-radius: 0">
                        <h5 style="border-radius: 15px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;background: rgba(0, 0, 255, 0.623);color: #fff;padding: 1rem;margin-top: -3.2rem;max-width: 20%;margin-bottom: 0;font-size:15px;position: absolute">تفاصيل المشكلة</h5>
                        <div class="col-6">
                           
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">القسم</h6>
                            <div>
                                {{ $ticket->Department->name }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">عنوان المشكلة</h6>
                            <div>
                                {{ $ticket->title }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">نبذة المشكلة</h6>
                            <div>
                                {{ $ticket->summary }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">مكان المشكلة</h6>
                            <div>
                                {{ $ticket->build_platform }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">خطوات المشكلة</h6>
                            <div>
                                {{ $ticket->steps_reproduce }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">شرح المشكلة</h6>
                            <div>
                                {{ $ticket->support_documentation }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">النتيجة المتوقعة</h6>
                            <div>
                                {{ $ticket->expected_result }}
                            </div>
                          </div>
                          <div class="titel" style="margin: 12px ;margin-top: 2rem">
                            <h6 style="color: rgba(0, 0, 0, 0.26)">النتيجة الفعلية</h6>
                            <div>
                                {{ $ticket->actual_result }}
                            </div>
                          </div>
                            <div class="w-50 me-1" style="margin: 12px ;margin-top: 2rem">
                                <h6 style="color: rgba(0, 0, 0, 0.26)">صور للمشكلة</h6>
                                <label for="input-file"
                                    style="display: flex;align-items: center;flex-direction: column; margin-top: 2rem">
                                    <a href="{{ asset('/storage/assets-ticket/' . $ticket->image) }}" class="fancybox"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('/storage/assets-ticket/' . $ticket->image) }}"
                                            id="profile-pic" class="rounded me-2" alt="..."
                                            style="width: 89%; height: 25vh;">
                                    </a>
                                </label>
                                <input type="" accept="image/jpeg, image/png, image/jpg" id="input-file"
                                    name="img" class="form-control d-none" onchange="previewImage(this)">
                            </div>

                         
                        </div>
                        <div class="col-6" style="padding-left: 0;">
                            <h5 style="border-radius: 15px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;background: rgba(0, 0, 255, 0.623);color: #fff;padding: 1rem;margin-top: -3.2rem;max-width: 25%;margin-bottom: 0;font-size:15px;">مايتم تعديلة</h5>
                            <div style="display: flex;border: 1px solid #02020240;border-radius: 25px;border-top-right-radius: 0;border-bottom-left-radius:0;height: 50vh;padding-top: 2rem;">
                            <div class="form-floating">
                                <div class="form-check form-switch ">
                                    @if ($ticket->new_or_repeated == 'جديد')
                                        <input class="reparted form-check-input" type="checkbox" id="reparted"
                                            name="reparted">
                                    @else
                                        <input class="reparted form-check-input" type="checkbox" id="reparted"
                                            name="reparted" checked>
                                    @endif
                                    <label class="form-check-label" style="margin-right: 3rem;" for="reparted">
                                        حدثت من قبل</label>
                                </div>
                            </div>

                            <div class="form-floating">
                                <select name="severe">
                                    <option value="عادية">عادية</option>
                                    <option value="متوسطة">متوسطة</option>
                                    <option value="مستعجلة">مستعجلة</option>
                                </select>
                            </div>



                            <div class="form-floating">
                                <select name="sat">
                                    <option value="يتم معالجتها">يتم معالجتها</option>
                                    <option value="تم حلها">تم حلها</option>
                                    <option value="معلقة">معلقة</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div class="form-floating">
                        <button type="submit" class="btn btn-secondary" style="margin-bottom: 3rem;background: blue;border:none">حفظ</button>
                        <a href="{{ route('admin') }}"><button type="button" class="btn btn-secondary" style="margin-bottom: 3rem">الغاء</button></a>
                    </div>
                    
            </div>
            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('js-ticket/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('assets-ticket/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets-ticket/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ url('js-ticket/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('js-ticket/datatables-simple-demo.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Include Fancybox CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <script>
        // Initialize Fancybox
        Fancybox.bind("[data-fancybox]", {
            // Options
        });
    </script>
</body>

</html>
