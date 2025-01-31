import sys
import json
import math

def validate_input(data):
    try:
        a = float(data.get('a', 0))
        b = float(data.get('b', 0))
        c = float(data.get('c', 0))
        return a, b, c
    except (ValueError, TypeError):
        return None

def calculate(a, b, c):
    if a < 1:
        return "Error: A must be greater than or equal to 1"
    if b == 0:
        return "Note: B is 0 and will not affect the result"
    if c < 0:
        return "Error: C cannot be negative"
    
    try:
        result = math.pow(c, 3)
        if result > 1000:
            result = math.sqrt(result) * 10
        else:
            result = math.sqrt(result) / a
        return f"Result: {result + b}"
    except Exception as e:
        return f"Calculation Error: {str(e)}"

def main():
    print("Content-type: text/html\n")
    
    try:
        input_data = json.loads(sys.argv[1])
        validated = validate_input(input_data)
        
        if validated is None:
            print("<h2>Error: Invalid input values</h2>")
            return
            
        a, b, c = validated
        result = calculate(a, b, c)
        print(f"<h2>{result}</h2>")
        
    except Exception as e:
        print(f"<h2>System Error: {str(e)}</h2>")

if __name__ == "__main__":
    main()