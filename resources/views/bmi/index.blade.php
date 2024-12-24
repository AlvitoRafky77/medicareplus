<form action="{{ route('bmi.calculate') }}" method="POST">
    @csrf
    <label for="weight">Berat Badan (kg):</label>
    <input type="number" name="weight" required>
    <label for="height">Tinggi Badan (cm):</label>
    <input type="number" name="height" required>
    <button type="submit">Hitung BMI</button>
</form>
