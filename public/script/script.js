fetch('/api/users')
.then(response => response.json())
.then(data => {
  const usersList = document.getElementById('users-list');
  data.forEach(user => {
    const listItem = document.createElement('li');
    listItem.textContent = `${user.first_name} ${user.last_name}`;
    usersList.appendChild(listItem);
  });
})
.catch(error => console.error('Error fetching data:', error));
