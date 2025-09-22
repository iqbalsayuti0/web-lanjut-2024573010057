<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel  Calculator</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('calculator.calculate') }}">
        @csrf
        <input type="number" name="number1" value="{{ old('number1', $number1 ?? '') }}" placeholder="Angka pertama" required>

        <select name="operator" required>
            <option value="add" {{ ($operator ?? '') == 'add' ? 'selcted' : '' }}>+</option>
            <option value="sub" {{ ($operator ?? '') == 'sub' ? 'selcted' : '' }}>-</option>
            <option value="mul" {{ ($operator ?? '') == 'mul' ? 'selcted' : '' }}>*</option>
            <option value="div" {{ ($operator ?? '') == 'div' ? 'selcted' : '' }}>/</option>
        </select>

        <input type="number" name="number2" value="{{ old('number2', $number2 ?? '') }}" placeholder="Angka kedua" required>
        <button  type="submit">Hitung</button>
    </form>

    @isset($result)
    <h3>Hasil {{ $result }}</h3>
    @endisset
</body>
</html>