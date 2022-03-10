class Solution:
    def doColor(self, image: list[list[int]], sr:int, sc: int, oldColor: int, newColor:int) -> list[list[int]]:
        if image[sr][sc] == oldColor:
            image[sr][sc] = newColor
            if sr - 1 >= 0:
                self.doColor(image, (sr-1), sc, oldColor, newColor )
            if (sr + 1) < len(image):
                self.doColor(image, (sr+1), sc, oldColor, newColor )
            if sc - 1 >= 0:
                self.doColor(image, sr, (sc-1), oldColor, newColor )
            if (sc + 1) < len(image[0]):
                self.doColor(image, sr, (sc+1), oldColor, newColor )

    def floodFill(self, image: list[list[int]], sr: int, sc: int, newColor: int) -> list[list[int]]:
        oldColor = image[sr][sc]
        if oldColor == newColor:
            return image

        self.doColor(image, sr, sc, oldColor, newColor )
        return image

image = [[1,1,1],[1,1,0],[1,0,1]]
sr = 1
sc = 1
newColor = 2

image = [[0,0,0],[0,0,0]]
sr = 0
sc = 0
newColor = 2

image = [[0,0,0],[0,1,1]]
sr = 1
sc = 1
newColor = 1

sol = Solution()
image = sol.floodFill(image, sr, sc, newColor)
print(image)