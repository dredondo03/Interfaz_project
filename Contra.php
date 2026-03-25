<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: url("https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1400&q=80") no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(56, 142, 60, 0.8), rgba(27, 94, 32, 0.8));
            backdrop-filter: blur(5px);
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 500px;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #f1f8e9;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .lock-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 16px;
            background: linear-gradient(135deg, #43a047, #2e7d32);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .lock-icon svg {
            width: 34px;
            height: 34px;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            color: #ffffff;
        }

        .form-section {
            margin-bottom: 24px;
        }

        .security-section {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .security-section h2 {
            font-size: 18px;
            font-weight: 600;
            color: #e8f5e9;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #c8e6c9;
            margin-bottom: 6px;
        }

        input[type="password"],
        input[type="text"],
        select {
            width: 100%;
            padding: 12px 16px;
            font-size: 15px;
            font-family: "Poppins", sans-serif;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.25);
            color: #1b5e20;
            transition: all 0.3s ease;
            outline: none;
            font-weight: 500;
        }

        input::placeholder,
        select option {
            color: #33691e;
        }

        input:focus,
        select:focus {
            border-color: #66bb6a;
            box-shadow: 0 0 0 3px rgba(102, 187, 106, 0.35);
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%231b5e20' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }

        .error-message {
            color: #f44336;
            font-size: 13px;
            margin-top: 6px;
            min-height: 18px;
            font-weight: 500;
        }

        .submit-btn {
            width: 100%;
            padding: 14px 24px;
            font-size: 16px;
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            color: white;
            background: linear-gradient(90deg, #43a047, #2e7d32, #43a047);
            background-size: 200% 100%;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.5);
        }

        .submit-btn:hover {
            background-position: 100% 0;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(56, 142, 60, 0.6);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        @media (max-width: 640px) {
            .card {
                padding: 28px 22px;
            }
            h1 { font-size: 24px; }
            .security-section { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="lock-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                <h1>Cambiar Contraseña</h1>
            </div>

            <form id="passwordForm">
                <div class="form-section">
                    <div class="input-group">
                        <label for="newPassword">Nueva Contraseña</label>
                        <input type="password" id="newPassword" name="newPassword" placeholder="Ingresa tu nueva contraseña" required>
                    </div>

                    <div class="input-group">
                        <label for="confirmPassword">Confirmar Contraseña</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Repite tu contraseña" required>
                        <span class="error-message" id="passwordError"></span>
                    </div>
                </div>

                <div class="security-section">
                    <h2>Preguntas de Seguridad</h2>
                    <div class="input-group">
                        <label for="question1">Pregunta 1</label>
                        <select id="question1" name="question1" required>
                            <option value="">Selecciona una pregunta</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="answer1">Respuesta 1</label>
                        <input type="text" id="answer1" name="answer1" placeholder="Tu respuesta" required>
                    </div>
                    <div class="input-group">
                        <label for="question2">Pregunta 2</label>
                        <select id="question2" name="question2" required>
                            <option value="">Selecciona una pregunta</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="answer2">Respuesta 2</label>
                        <input type="text" id="answer2" name="answer2" placeholder="Tu respuesta" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Cambiar</button>
            </form>
        </div>
    </div>

    <script>
        const securityQuestions = [
            "¿Cuál es el nombre de tu primera mascota?",
            "¿En qué ciudad naciste?",
            "¿Cuál es tu comida favorita?",
            "¿Cuál es el nombre de tu mejor amigo de la infancia?",
            "¿Cuál fue tu primer trabajo?",
            "¿Cuál es el nombre de tu escuela primaria?",
            "¿Cuál es tu película favorita?",
            "¿Cuál es el segundo nombre de tu madre?",
            "¿En qué calle vivías cuando eras niño?",
            "¿Cuál es tu libro favorito?"
        ];

        const q1 = document.getElementById("question1");
        const q2 = document.getElementById("question2");
        const np = document.getElementById("newPassword");
        const cp = document.getElementById("confirmPassword");
        const err = document.getElementById("passwordError");
        const form = document.getElementById("passwordForm");

        function populate() {
            securityQuestions.forEach((q, i) => {
                const opt1 = new Option(q, i);
                const opt2 = new Option(q, i);
                q1.add(opt1);
                q2.add(opt2);
            });
        }

        function updateQ2() {
            const sel = q1.value;
            Array.from(q2.options).forEach(opt => {
                opt.disabled = opt.value === sel && opt.value !== "";
            });
            if (q2.value === sel) q2.value = "";
        }

        function validatePasswords() {
            if (np.value && cp.value && np.value !== cp.value) {
                err.textContent = "Las contraseñas no coinciden";
                return false;
            } else {
                err.textContent = "";
                return true;
            }
        }

        q1.addEventListener("change", updateQ2);
        np.addEventListener("input", validatePasswords);
        cp.addEventListener("input", validatePasswords);

        form.addEventListener("submit", e => {
            e.preventDefault();
            if (!validatePasswords()) return;
            alert("¡Contraseña cambiada exitosamente!");
        });

        populate();
    </script>
</body>
</html>
