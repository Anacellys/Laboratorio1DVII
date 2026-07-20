<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'] ?? '';
    
    if (empty($expression)) {
        echo json_encode(['error' => true, 'message' => 'Expresión vacía']);
        exit();
    }
    
    // Validar que solo contenga números y operadores permitidos
    if (!preg_match('/^[0-9+\-*/.() ]+$/', $expression)) {
        echo json_encode(['error' => true, 'message' => 'Caracteres no permitidos']);
        exit();
    }
    
    try {
        // Validar división por cero
        if (preg_match('/\/\s*0\s*(?:[+\-*\/]|$|\))/', $expression)) {
            echo json_encode(['error' => true, 'message' => 'División por cero']);
            exit();
        }
        
        // Usar eval de forma segura (ya validado)
        $result = eval('return ' . $expression . ';');
        
        // Verificar si el resultado es válido
        if (is_nan($result) || is_infinite($result)) {
            echo json_encode(['error' => true, 'message' => 'Resultado inválido']);
            exit();
        }
        
        echo json_encode(['error' => false, 'result' => $result]);
    } catch (Exception $e) {
        echo json_encode(['error' => true, 'message' => 'Error en el cálculo']);
    }
} else {
    echo json_encode(['error' => true, 'message' => 'Método no permitido']);
}
?>
