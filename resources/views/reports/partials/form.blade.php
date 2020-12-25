<div class="form-group">
    <label for="school">Учебная дисциплина</label>
    <input type="text" class="form-control @error('school') is-invalid @enderror" id="school" name="school"
           value="{{ $reports->school ?? old('school')}}" required>

</div>
<div class="form-group">
    <label for="semestr">Количество студентов в учебной группе на окончание семестра</label>
    <input type="string" class="form-control @error('semestr') is-invalid @enderror" id="semestr" name="semestr"
           value="{{ $reports->semestr ?? old('semestr')}}" required>

</div>

<div class="form-group">
    <label for="students_five">количество студентов, получивших по результатам учебного периода оценку «5»</label>
    <input type="string" class="form-control @error('students.five') is-invalid @enderror" id="students_five" name="students_five"
           value="{{ $reports->students_five ?? old('students_five')}}" required>

</div>
    <div class="form-group">
    <label for="students_four">количество студентов, получивших по результатам учебного периода оценку «4»</label>
    <input type="string" class="form-control @error('students.four') is-invalid @enderror" id="students_four" name="students_four"
           value="{{ $reports->students_four ?? old('students_four')}}" required>

</div>
    <div class="form-group">
    <label for="students_three">количество студентов, получивших по результатам учебного периода оценку «3»</label>
    <input type="string" class="form-control @error('students_three') is-invalid @enderror" id="students_three" name="students_three"
           value="{{ $reports->students_three ?? old('students_three')}}" required>

</div>
        <div class="form-group">
    <label for="students_two">количество студентов, получивших по результатам учебного периода оценку «2»</label>
    <input type="string" class="form-control @error('students_two') is-invalid @enderror" id="students_two" name="students_two"
           value="{{ $reports->students_two ?? old('students_two')}}" required>

</div>
        <div class="form-group">
    <label for="procent_five">Процент количество студентов, получивших по результатам учебного периода оценку «5»</label>
    <input type="string" class="form-control @error('students_five') is-invalid @enderror" id="students_five" name="students_five"
           value="{{ $reports->students_five ?? old('students_five')}}" required>

</div>
        <div class="form-group">
    <label for="procent_four">Процент количество студентов, получивших по результатам учебного периода оценку «4»</label>
    <input type="string" class="form-control @error('students_four') is-invalid @enderror" id="students_four" name="students_four"
           value="{{ $reports->students_four ?? old('students_four')}}" required>

</div>
        <div class="form-group">
    <label for="procent_three">Процент количество студентов, получивших по результатам учебного периода оценку «3»</label>
    <input type="string" class="form-control @error('students_three') is-invalid @enderror" id="students_three" name="students_three"
           value="{{ $reports->students_three ?? old('students_three')}}" required>

</div>
    <div class="form-group">
    <label for="procent_two">Процент количество студентов, получивших по результатам учебного периода оценку «3»</label>
    <input type="string" class="form-control @error('students_two') is-invalid @enderror" id="students_two" name="students_two"
           value="{{ $reports->students_two ?? old('students_two')}}" required>

</div>
       <div class="form-group">
    <label for="kpy">вычисление качественного показателя успеваемости (КПУ)</label>
    <input type="string" class="form-control @error('kpy') is-invalid @enderror" id="kpy" name="kpy"
           value="{{ $reports->kpy ?? old('kpy')}}" required>

</div>
       <div class="form-group">
    <label for="py">вычисление абсолютный показатель успеваемости (ПУ)</label>
    <input type="string" class="form-control @error('py') is-invalid @enderror" id="py" name="py"
           value="{{ $reports->py ?? old('py')}}" required>

</div>
      <div class="form-group">
    <label for="ca">вычисление среднего балла (С/А)</label>
    <input type="string" class="form-control @error('ca') is-invalid @enderror" id="ca" name="ca"
           value="{{ $reports->ca ?? old('ca')}}" required>

</div>
<hr>
<button type="submit" class="btn btn-primary">Save</button>
<a class="btn btn-danger" href="{{ route('reports.index') }}">Cancel</a>
