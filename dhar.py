class Node:
     
    def _init_(self, name,rno,mark,courseid,coursen):
        self.name = name
        self.rno = rno
        self.mark = mark
        self.courseid = courseid
        self.coursen = coursen
        self.prev = None
        self.next = None
 
# function to create and return a new node
# of a doubly linked list
def getNode(data):
 
    # allocate node
    newNode = Node(0)
 
    # put in the data
    newNode.data = data
    newNode.prev = newNode.next = None
    return newNode
 
# function to insert a new node in sorted way in
# a sorted doubly linked list
def sortedInsert(head_ref, newNode):
 
    current = None
 
    # if list is empty
    if (head_ref == None):
        head_ref = newNode
 
    # if the node is to be inserted at the beginning
    # of the doubly linked list
    elif ((head_ref).name >= newNode.name) :
        newNode.next = head_ref
        newNode.next.prev = newNode
        head_ref = newNode
     
    else :
        current = head_ref
 
        # locate the node after which the new node
        # is to be inserted
        while (current.next != None and current.next.name < newNode.name):
            current = current.next
        """Make the appropriate links """
        newNode.next = current.next
 
        # if the new node is not inserted
        # at the end of the list
        if (current.next != None):
            newNode.next.prev = newNode
            
        current.next = newNode
        newNode.prev = current
     
    return head_ref;
     
# function to sort a doubly linked list
# using insertion sort
def insertionSort(head):
    sort = None
 
    # Traverse the given doubly linked list
    # and insert every node to 'sort'
    current = head
    while (current != None) :
 
        # Store next for next iteration
        next = current.next
 
        # removing all the links so as to create
        # 'current' as a new node for insertion
        current.prev = current.next = None
 
        # insert current in 'sorted' doubly linked list
        sort = sortedInsert(sort, current)
 
        # Update current
        current = next
     
    # Update head_ref to point to
    # sorted doubly linked list
   
    head = sort
     
    return head
 
# function to print the doubly linked list
def printList(head):
    print("\t**RECORD**")
    print("_______________")
    print("RNO     NAME      COURSE-ID  COURSE-NAME   MARK")
    while (head != None) :
        print(head.rno,"  ",head.name,"    ",head.courseid,"    ",head.coursen,"       ",head.mark )
        head=head.next
        
     
# function to insert a node at the
# beginning of the doubly linked list
def push(head_ref,rno,name,courseid,coursen,mark):
 
    """ allocate node """
    new_node = Node(0,0,0,0,0)
     
    """ put in the data """
    new_node.name = name
    new_node.rno = rno
    new_node.mark = mark
    new_node.courseid = courseid
    new_node.coursen = coursen
 
    """ Make next of new node as head
    and previous as None """
    new_node.next = (head_ref)
    new_node.prev = None
 
    """ change prev of head node to new node """
    if ((head_ref) != None):
        (head_ref).prev = new_node
 
    """ move the head to point to the new node """
    (head_ref) = new_node
    return head_ref
 
if _name_ == "_main_":
 
    """ start with the empty doubly linked list """
    head = None
    n = int(input("Enter the number of students : "))
    print("Enter the student records : ")
    for i in range(0,n):
        print("**DETAILS OF STUDENT #",i+1)
        rno = input("Enter the roll number : ")
        name = input("Enter the name : ")
        courseid = input("Enter the course id : ")
        coursen = input("Enter the course name : ")
        mark = input("Enter the total mark : ")
        
        head = push(head,rno,name,courseid,coursen,mark)
        
    head = insertionSort(head)
 
    printList(head)