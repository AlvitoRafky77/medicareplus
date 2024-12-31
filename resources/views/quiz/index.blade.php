<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf4fc;
        }
        .quiz-container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="quiz-container">
            <h2 class="text-center">Quiz Kesehatan</h2>
            <form action="{{ route('quiz.result') }}" method="POST">
                @csrf
                @foreach ($questions as $question)
                    <div class="mb-4">
                        <h5>{{ $loop->iteration }}. {{ $question->question }}</h5>
                        <div>
                            <input type="radio" id="option_a_{{ $question->id }}" name="answers[{{ $question->id }}]" value="a">
                            <label for="option_a_{{ $question->id }}">{{ $question->option_a }}</label>
                        </div>
                        <div>
                            <input type="radio" id="option_b_{{ $question->id }}" name="answers[{{ $question->id }}]" value="b">
                            <label for="option_b_{{ $question->id }}">{{ $question->option_b }}</label>
                        </div>
                        <div>
                            <input type="radio" id="option_c_{{ $question->id }}" name="answers[{{ $question->id }}]" value="c">
                            <label for="option_c_{{ $question->id }}">{{ $question->option_c }}</label>
                        </div>
                        <div>
                            <input type="radio" id="option_d_{{ $question->id }}" name="answers[{{ $question->id }}]" value="d">
                            <label for="option_d_{{ $question->id }}">{{ $question->option_d }}</label>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
