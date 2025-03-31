// Функція fetchWithTimeout
function fetchWithTimeout(url, timeout) {
    return Promise.race([
        fetch(url),
        new Promise((_, reject) =>
            setTimeout(() => reject(new Error('Request timeout')), timeout)
        )
    ]);
}

// Async функція для виконання запитів
async function fetchData() {
    const postUrl = 'https://jsonplaceholder.typicode.com/posts/1';
    const userUrl = 'https://jsonplaceholder.typicode.com/users/1';
    const timeout = 3000; // Таймаут у мс

    try {
        const results = await Promise.allSettled([
            fetchWithTimeout(postUrl, timeout),
            fetchWithTimeout(userUrl, timeout)
        ]);

        // Обробка результатів
        const [postResult, userResult] = results;

        if (postResult.status === 'rejected') {
            console.log('Post fetch failed:', postResult.reason.message);
        } else {
            const post = await postResult.value.json();
            console.log('Post:', post);
        }

        if (userResult.status === 'rejected') {
            console.log('User fetch failed:', userResult.reason.message);
        } else {
            const user = await userResult.value.json();
            console.log('User:', user);
        }

        // Перевірка таймауту
        if (results.some(result => result.status === 'rejected' && result.reason.message === 'Request timeout')) {
            return 'Request timeout';
        }

        return 'All requests completed successfully';

    } catch (error) {
        console.error('Error:', error);
        return 'An unexpected error occurred';
    }
}

// Виклик функції
fetchData().then(result => console.log(result));
