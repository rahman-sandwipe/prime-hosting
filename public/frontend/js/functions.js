// Limit by word
function limitWords(text, wordLimit) {
    const words = text.trim().split(/\s+/);
    return words.length > wordLimit
        ? words.slice(0, wordLimit).join(' ') + '...'
        : text;
}

// ✅ Limit by characters
function limitCharacters(text, charLimit) {
    return text.length > charLimit
        ? text.slice(0, charLimit).trim() + '...'
        : text;
}