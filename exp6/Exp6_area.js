// Function to calculate the area of a rectangle
function calculateRectangleArea(length, width) {
    return length * width;
}

// Function to calculate the area of a triangle
function calculateTriangleArea(base, height) {
    return (base * height) / 2;
}

// Function to calculate the area of a circle
function calculateCircleArea(radius) {
    return Math.PI * radius * radius;
}

// Predefined dimensions
const rectangleLength = 10;
const rectangleWidth = 5;

const triangleBase = 8;
const triangleHeight = 6;

const circleRadius = 7;

// Calculate areas
const rectangleArea = calculateRectangleArea(rectangleLength, rectangleWidth);
const triangleArea = calculateTriangleArea(triangleBase, triangleHeight);
const circleArea = calculateCircleArea(circleRadius);

// Display the results
console.log(`The area of the rectangle is: ${rectangleArea}`);
console.log(`The area of the triangle is: ${triangleArea}`);
console.log(`The area of the circle is: ${circleArea}`);
