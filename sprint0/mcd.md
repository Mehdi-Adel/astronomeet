IS DESTINED TO, 11 EVENT LEVEL, 11 EVENT 
EVENT LEVEL: level name, created at, updated at 
CAN CREATE, 11 EVENT, 0N USER (NATIVE)
USEFUL LINK: name, url, category, created at, updated at 
CAN BE A PART OF, 0N LINK CATEGORY, 11 USEFUL LINK

EVENT: location, datetime, level name, created at, updated at 
HAS INSCRIPTION STATUS, 11 USER (NATIVE), 1N EVENT: status name 
USER (NATIVE): username, email, password, status member, created at, updated at 
CAN SHARE, 11 USEFUL LINK, 1N USER (NATIVE)
LINK CATEGORY: category name, created at, updated at

CAN PARTICIPATE, 1N EVENT, 0N USER (NATIVE)
EQUIPMENT REVIEW: title, created at, updated at 
CAN POST, 11 EQUIPMENT REVIEW, 0N USER (NATIVE)
CAN BE, 11 USER LEVEL, 1N USER (NATIVE)
USER LEVEL: level name, created at, updated at
