@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Цифровой отчет преподавателя</div>
                    <div class="card-body">
                        <img src="{{asset("storage/image.jpg")}}" class="rounded float-left" alt="...">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <p class="col-md-12"><b>Цифровой отчет преподавателя</b> - это уникальное программное обеспецение, которое позволит вам не задумываться о потерянных отчетах и позволит сосредоточиться на действительно важных делах.</p>
                                </div>
                                <div class="row justify-content-start">
                                    <p class="col-md-12">Особенностями нашего продукта являются:</p>
                                </div>
                                <div class="row justify-content-start">
                                    <p><ul><li>Хранение информации об успеваемости студентов по годам и семестрам обучения</li></ul>
                                        <ul><li>Вычисление таких показателей для учебных предметов, как:</li>
                                        <ul><li>процента учащихся получивших по результатам учебного периода различные оценки (5, 4, 3. 2)</li>
                                        <li>качественного показателя успеваемости (КПУ)</li>
                                        <li>абсолютный показатель успеваемости (ПУ)</li>
                                        <li>среднего балла (С/А)</li></p>
                                        </ul>
                                        </ul>
                                </div>
                                <div class="row justify-content-start">
                                    <p class="col-md-12">Так же в дальнейшем, наш продукт будет совершенствуется и расширять свои функциональные возможности по аналитике данных</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
