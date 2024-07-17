<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Edit</title>
     {{-- شعار الصفحه --}}
     <link href="{{ url('lgindex/img/Vector.svg') }}" rel="icon">
     <link href="{{ url('lgindex/img/Vector.svg') }}" rel="apple-touch-icon"> 
     
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
    <link rel="stylesheet" href="{{ url('bootstrap-5.0.2-dist-ticket/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('bootstrap-5.0.2-dist-ticket/js/bootstrap.min.js') }}">
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
                    {{-- مايتم تعديلة من المشكلة --}}
                    <div class="row">
                        <div class="col-9" style="display: flex;text-align: center;">
                            <h4
                                style="    padding-top: 0.5rem; margin-bottom: 0;font-family: 'Alexandria', sans-serif; font-weight: bold; width: 80%;">
                                تفاصيل المشكلة</h4>
                            <div style="display: flex; gap: 20px; width: 100%;">
                                <div
                                    style="padding: 0.7rem;border-radius: 25px;background: #F4F4F4;width: 24%; text-align: center">
                                    <select name="severe" style="border:none;background: none">
                                        <option value="عادية">عادية</option>
                                        <option value="متوسطة">متوسطة</option>
                                        <option value="مستعجلة">مستعجلة</option>
                                    </select>
                                </div>
                                <div
                                    style="padding: 0.7rem;border-radius: 25px;background: #F4F4F4;width: 28%; text-align: center">
                                    <select name="sat" style="border:none;background: none">
                                        <option value="يتم معالجتها">يتم معالجتها</option>
                                        <option value="تم حلها">تم حلها</option>
                                        <option value="معلقة">معلقة</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="">
                                <div class="form-check form-switch ">
                                    @if ($ticket->new_or_repeated == 'جديد')
                                        <input class="reparted form-check-input" type="checkbox" id="reparted"
                                            name="reparted" style="height: 3.7vh;width: 18%">
                                    @else
                                        <input class="reparted form-check-input" type="checkbox" id="reparted"
                                            name="reparted" style="height: 3.7vh;width: 18%" checked>
                                    @endif
                                    <label class="form-check-label" style="margin-right: 3rem;" for="reparted">
                                        حدثت من قبل</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- عرض تفاصيل المشكلة --}}
                    <div class="row" style="margin-top: 2rem">
                        <div class="col-4" style="margin-right: 4.5rem">
                            <div style="background: #F4F4F4; border-radius: 9px;padding: 1rem;">
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
                            </div>
                            <div class="image-container" style="margin-top: 2rem; background: #F4F4F4; border-radius: 9px; text-align: center; padding: 1rem;display: flex;gap: 14px;flex-direction: column;">
                                @foreach ($imagePaths as $imagePath)
                                    <a href="{{ asset('/storage/assets-ticket/' . $imagePath) }}" class="fancybox" data-fancybox="gallery">
                                        <img src="{{ asset('/storage/assets-ticket/' . $imagePath) }}" alt="Ticket Image" style="width: 100%; border-radius: 9px;">
                                    </a>
                                @endforeach
                            </div>
                            
                            <h6 style="color: rgba(0, 0, 0, 0.26);margin-top: 1rem;text-align: center">صورة للمشكلة
                            </h6>

                        </div>
                        <div class="col-8" style="max-width: 50%">
                            <div style="background: #F4F4F4; border-radius: 9px;padding: 1rem;">
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
                            </div>
                        </div>
                    </div>
                    <div class="" style="margin-left: 7rem;margin-right: 7rem;text-align: end; display: flex;gap:10px;justify-content: end"> 
                            <button type="button" class="btn btn-secondary"
                                style="margin-bottom: 3rem;border-radius: 4px;width: 15%;background: #F4F4F4;color: black;border: none" onclick="navigateToSecondPage()">الغاء</button>
                        <button type="submit" class="btn btn-secondary"
                            style="margin-bottom: 3rem;background: #0275D8;border:none;border-radius: 4px;width: 15%;">حفظ</button>
                      
                    </div>

            </div>
            </form>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted" style="display: flex;justify-content: center;"><img
                            src="{{ url('assets-ticket/img/Frame.svg') }}" alt="" style="max-width: 30%;">
                    </div>
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
  <script>
    function navigateToSecondPage() {
      window.location.href = "{{ route('admin') }}";
    }
  </script>
</body>

</html>
{{-- <div class="col-6" style="padding-left: 0;">
    <h5
        style="border-radius: 15px;border-bottom-left-radius: 0;border-bottom-right-radius: 0;background: rgba(0, 0, 255, 0.623);color: #fff;padding: 1rem;margin-top: -3.2rem;max-width: 25%;margin-bottom: 0;font-size:15px;">
        مايتم تعديلة</h5>
    <div
        style="display: flex;border: 1px solid #02020240;border-radius: 25px;border-top-right-radius: 0;border-bottom-left-radius:0;height: 50vh;padding-top: 2rem;">
        <div class="form-floating">
            <div class="form-check form-switch ">
                @if ($ticket->new_or_repeated == 'جديد')
                    <input class="reparted form-check-input" type="checkbox" id="reparted" name="reparted">
                @else
                    <input class="reparted form-check-input" type="checkbox" id="reparted" name="reparted" checked>
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
</div> --}}
