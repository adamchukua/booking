@extends('layouts.app')

@section('content')
    <div class="bg-main">
        <div class="container mb-5">
            <header>
                <h1 class="header--title">Знайдіть помешкання для наступної подорожі</h1>
            </header>

            <div class="search">
                <form action="" method="get">
                    <div class="row g-0" >
                        <div class="col-5">
                            <input type="text" placeholder="Куди Ви вирушаєте?" class="form-control search--input">
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control search--input">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control search--input">
                        </div>
                        <div class="col-2">
                            <button class="btn search--input search--btn">Шукати</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <section>
            <p class="section--title">Пошук за типом помешкання</p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <a class="section-item">
                        <img src="https://r-xx.bstatic.com/xdata/images/xphoto/300x240/45450082.jpeg?k=beb101b827a729065964523184f4db6cac42900c2415d71d516999af40beb7aa&o=" alt="" class="section-item--img">
                        <p class="section-item--title">Готелі</p>
                        <p class="section-item--subtitle">1 000 одиниць</p>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <a class="section-item">
                        <img src="https://r-xx.bstatic.com/xdata/images/xphoto/300x240/45450082.jpeg?k=beb101b827a729065964523184f4db6cac42900c2415d71d516999af40beb7aa&o=" alt="" class="section-item--img">
                        <p class="section-item--title">Готелі</p>
                        <p class="section-item--subtitle">1 000 одиниць</p>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <a class="section-item">
                        <img src="https://r-xx.bstatic.com/xdata/images/xphoto/300x240/45450082.jpeg?k=beb101b827a729065964523184f4db6cac42900c2415d71d516999af40beb7aa&o=" alt="" class="section-item--img">
                        <p class="section-item--title">Готелі</p>
                        <p class="section-item--subtitle">1 000 одиниць</p>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <a class="section-item">
                        <img src="https://r-xx.bstatic.com/xdata/images/xphoto/300x240/45450082.jpeg?k=beb101b827a729065964523184f4db6cac42900c2415d71d516999af40beb7aa&o=" alt="" class="section-item--img">
                        <p class="section-item--title">Готелі</p>
                        <p class="section-item--subtitle">1 000 одиниць</p>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <p class="section--title">Пошук областями України</p>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="areas-item">
                        <a class="areas-item--title">Автономна Республіка Крим</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Вінницька область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Волинська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Дніпропетровська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Чернігівська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <div class="areas-item">
                        <a class="areas-item--title">Донецька область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Житомирська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Закарпатська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Запорізька область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">місто Київ</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <div class="areas-item">
                        <a class="areas-item--title">Івано-Франківська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Київська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Кіровоградська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Луганська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">місто Севастополь</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <div class="areas-item">
                        <a class="areas-item--title">Львівська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Миколаївська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Одеська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Полтавська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <div class="areas-item">
                        <a class="areas-item--title">Рівненська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Сумська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Тернопільська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Харківська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-2">
                    <div class="areas-item">
                        <a class="areas-item--title">Херсонська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Хмельницька область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Черкаська область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>

                    <div class="areas-item">
                        <a class="areas-item--title">Чернівецька область</a>
                        <p class="areas-item--subtitle">1 000 помешкань</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
